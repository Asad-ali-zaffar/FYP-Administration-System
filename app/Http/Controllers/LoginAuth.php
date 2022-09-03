<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_model;
use App\Models\Admin;
use App\Models\Teacher;
use flash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LoginAuth extends Controller
{
    public function adminmarkread($id){

        $user=session()->get('user');
        $user->unreadNotifications->where('id',$id)->markAsRead();
        return redirect('/admin_dashboard');

}
    public function markread($id){


            $user=session()->get('user');
            $user->unreadNotifications->where('id',$id)->markAsRead();
            // session()->put(['m'=>count($user->unreadNotifications)]);
            // $id=$user->unreadNotifications[0]->data['id'];
            // return redirect('/superviser');
            // Student_model::where('id',$id)
            // ->update([
            //     'std_status'=>1,
            // ]);
            $id=$user->Notifications[0]->notifiable_id;
            $url="/Notification";
            if(!is_null($user->Notifications[0]->data['url'])){
            $url=$user->Notifications[0]->data['url'];
            $id=$user->Notifications[0]->id;
        }

            return redirect($url.'/'.$id);

    }
    public function admin_profile()
    {
        return view('Admin.app-profile');
    }
    public function superviser_profile()
    {
        return view('app-profile');
    }
    public function student_profile()
    {
        return view('student.app-profile');
    }
    public function index()
    {
        session()->forget('User_Login');
        $url="/";
        return view('index')->with(compact('url'));
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|max:255|regex:/(.*)@kfueit\.edu.pk/i',
                'password'=>'required'
            ]
        );
        $email=$request['email'];
        $password=md5($request['password']);

        $student=Student_model::where(['email'=>$email,'std_password'=>$password,'std_status'=>1])->count();
        $superadmin=Admin::where(['admin_email'=>$email,'admin_password'=>$password])->count();
        $superviser=Teacher::where(['teacher_email'=>$email,'teacher_password'=>$password,'teacher_status'=>1])->count();

        if($student>0)
        {
            $request->session()->put(['User_Login'=>$email]);
            $request->session()->put(['User_password'=>$password]);
            // echo "Student Login";
            return redirect('/student_login');
        }
        elseif($superviser>0)
        {
            $request->session()->put(['User_Login'=>$email]);
            $request->session()->put(['User_password'=>$password]);
            // echo "Superviser Login";
            return redirect('/superviser');
        }
        elseif($superadmin>0)
        {
            $request->session()->put(['User_Login'=>$email]);
            $request->session()->put(['User_password'=>$password]);
            // echo "Admin Login";
            return redirect('/admin_dashboard');
        }
        else
        {
            // $request->session()->flash('error','Please enter valid login detail');
            return redirect()->back()->with('fail','Please wait you have access not allowed. Try agian ');
        }


    }
    public function student()
    {

            // $s=session()->all();
            // echo "<pre>";
            //     print_r($s);
            //     die;
              $email = session()->get('User_Login');
              $password = session()->get('User_password');
              $student=Student_model::where(['email'=>$email,'std_password'=>$password])->count();
              $profile_data=Student_model::where(['email'=>$email,'std_password'=>$password])->get();
              session()->put(['profile_data'=>$profile_data]);
              $id=session()->get('profile_data');
              $user = Student_model::find($id[0]->id);
              session()->put(['user'=>$user,'m'=>count($user->unreadNotifications)]);
            //   $m=;
              if($student>0)
              {
                return view('student.std_index');
              }
              return redirect()->back();


    }
    public function superviser()
    {
        $email = session()->get('User_Login');
        $password = session()->get('User_password');
        $superviser=Teacher::where(['teacher_email'=>$email,'teacher_password'=>$password])->count();
        $profile_data=Teacher::where(['teacher_email'=>$email,'teacher_password'=>$password])->get();
        session()->put(['profile_data'=>$profile_data]);
        $id=session()->get('profile_data');
        $user = Teacher::find($id[0]->id);
        session()->put(['user'=>$user,'m'=>count($user->unreadNotifications)]);
        if($superviser>0)
        {
            return view('index1');

        }
        return redirect()->back();

    }
    public function admin()
    {
        $email = session()->get('User_Login');
        $password = session()->get('User_password');
        $superadmin=Admin::where(['admin_email'=>$email,'admin_password'=>$password])->count();
        $profile_data=Admin::where(['admin_email'=>$email,'admin_password'=>$password])->get();
        session()->put(['profile_data'=>$profile_data]);
        $id=session()->get('profile_data');
        $user = Admin::find($id[0]->id);
        session()->put(['user'=>$user,'m'=>count($user->unreadNotifications)]);
        if($superadmin>0)
        {
            return view('Admin.Admin_index');
        }
        return redirect()->back();
    }
    public function forgotPassword()
    {
        $title="Forgot Password";
        $url="/forgot_password";
        return view('forget_password')->with(compact('title','url'));
    }
    public function sendlink(Request $request)
    {
        $email=$request['email'];
        $superadmin=Admin::where(['admin_email'=>$email])->count();
        $superviser=Teacher::where(['teacher_email'=>$email])->count();

        if($superviser>0)
        {
            $request->validate([
                'email'=>'required|email|exists:tbl_teacher,teacher_email',
            ]);
            // echo"teacher";
            $token=Str::random(60);
            DB::table('password_resets')->insert([
                'email'=>$request->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),

            ]);
            $action_link=route('reset.password.form',['token'=>$token,'email'=>$request->email]);
            $body="we are received a request to reset password for <b>FYP management system</b> account associated with".$request->email.
            ". You can reset your password by clicking the link below";
            Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($massage) use ($request){
                $massage->from('noreply@example.com','FYP management system');
                $massage->to($request->email,'fyp')->subject('reset Password');
            });
            return back()->with('success','we have e-mailed your password reset link!');
        }
        elseif($superadmin>0)
        {
            $request->validate([
                'email'=>'required|email|exists:admin,admin_email',
            ]);
            // echo"admin";
            $token=Str::random(60);
            DB::table('password_resets')->insert([
                'email'=>$request->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),

            ]);
            $action_link=route('reset.password.form',['token'=>$token,'email'=>$request->email]);
            $body="we are received a request to reset password for <b>FYP management system</b> account associated with".$request->email.
            ". You can reset your password by clicking the link below";
            Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($massage) use ($request){
                $massage->from('noreply@example.com','FYP management system');
                $massage->to($request->email,'fyp')->subject('reset Password');
            });
            return back()->with('success','we have e-mailed your password reset link!');
        }
        else
        {
            $request->validate([
                'email'=>'required|email|exists:student,email',
            ]);
            // echo"student";
            $token=Str::random(60);
            DB::table('password_resets')->insert([
                'email'=>$request->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),

            ]);
            $action_link=route('reset.password.form',['token'=>$token,'email'=>$request->email]);
            $body="we are received a request to reset password for <b>FYP management system</b> account associated with".$request->email.
            ". You can reset your password by clicking the link below";
            Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($massage) use ($request){
                $massage->from('noreply@example.com','FYP management system');
                $massage->to($request->email,'fyp')->subject('reset Password');
            });
            return back()->with('success','we have e-mailed your password reset link!');
        }
    }
    public function showresetform(Request $request,$token = null)
    {
        $url="/reset_password";
        return view('reset_password')->with(['token'=>$token,'email'=>$request->email])->with(compact('url'));
    }
    public function passwordReset(Request $request)
    {
        $email=$request['email'];
        $superadmin=Admin::where(['admin_email'=>$email])->count();
        $superviser=Teacher::where(['teacher_email'=>$email])->count();
        if($superviser>0)
        {
            $request->validate([
                'email'=>'required|email|exists:tbl_teacher,teacher_email',
                'password'=>'required|min:8|same:confirm_password',
                'confirm_password'=>'required',
            ]);
            $check_token=DB::table('password_resets')->where([
                'email'=>$request->email,
                'token'=>$request->token,
            ])->first();
            if(!$check_token)
            {
                return redirect()->back()->with('fail','Invalid Token');
            }
            else{
                Teacher::where('teacher_email',$request->email)->update([
                    'teacher_password'=>md5($request->password)
                ]);
                DB::table('password_resets')->where([
                    'email'=>$request->email
                ])->delete();
                return redirect('/')->with('info','Your password has been changed! You can login with new password')->with('varifidEmail',$request->email);
            }
        }
        elseif($superadmin>0)
        {
            $request->validate([
                'email'=>'required|email|exists:admin,admin_email',
                'password'=>'required|min:8|same:confirm_password',
                'confirm_password'=>'required',
            ]);
            $check_token=DB::table('password_resets')->where([
                'email'=>$request->email,
                'token'=>$request->token,
            ])->first();
            if(!$check_token)
            {
                return redirect()->back()->with('fail','Invalid Token');
            }
            else{
                Admin::where('admin_email',$request->email)->update([
                    'admin_password'=>md5($request->password)
                ]);
                DB::table('password_resets')->where([
                    'email'=>$request->email
                ])->delete();
                return redirect('/')->with('info','Your password has been changed! You can login with new password')->with('varifidEmail',$request->email);
            }

        }
        else
        {
            $request->validate([
                'email'=>'required|email|exists:student,email',
                'password'=>'required|min:8|same:confirm_password',
                'confirm_password'=>'required',
            ]);
            $check_token=DB::table('password_resets')->where([
                'email'=>$request->email,
                'token'=>$request->token,
            ])->first();
            if(!$check_token)
            {
                return redirect()->back()->with('fail','Invalid Token');
            }
            else{
                Student_model::where('email',$request->email)->update([
                    'std_password'=>md5($request->password)
                ]);
                DB::table('password_resets')->where([
                    'email'=>$request->email
                ])->delete();
                return redirect('/')->with('info','Your password has been changed! You can login with new password')->with('varifidEmail',$request->email);
            }
        }
    }
}
