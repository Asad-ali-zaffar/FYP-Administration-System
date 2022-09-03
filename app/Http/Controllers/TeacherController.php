<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\department;
use App\Notifications\GiveSuperviserLoginAccessByAdmin;
use Illuminate\Support\Facades\Notification;
use App\Models\Admin;

class TeacherController extends Controller
{
    public function fyp_proposal($id = null){
        $user= session()->get('user');
    //  dd($user);
    //    id,heading,name,email,id,proname,description,
        foreach ($user->notifications as $data) {
            if (is_null($data->id)) {
               return redirect()->back();
            }
            $id = $data->id;
        }
        // die;
        return view('openproposal', compact('id'));
    }
    public function notification($id = null)
    {

        $user = session()->get('user');
        foreach ($user->notifications as $data) {
            if (is_null($data->id)) {
               return redirect()->back();
            }
            $id = $data->id;
        }
        // die;
        return view('notifiaction', compact('id'));
    }
    public function teacherAdd_admin(Request $request){
        $request->validate(
            [
                'Superviser_name' => 'required|max:255|regex:/^[a-zA-Z_ ]+$/u',
                'email' => 'required|email|unique:tbl_teacher,teacher_email,id,id|max:255|regex:/(.*)@kfueit\.edu.pk/i',
                'teacher_dept' => 'required|integer',
                'Superviser_Image' => 'required|max:10000',
                'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#@%]).*$/',

            ]
        );

        $Teacher = new Teacher();
        $Teacher->teacher_name = $request['Superviser_name'];
        $Teacher->teacher_email = $request['email'];
        $Teacher->dept_id = $request['teacher_dept'];
        $Teacher->teacher_status = 0;
        if ($request->hasFile('Superviser_Image')) {
            $file = $request->file('Superviser_Image');
            $teaser_image = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Student');
            $file->move($destinationPath, $teaser_image);
            $Teacher->image = $teaser_image;
        }
        $Teacher->teacher_password = md5($request['password']);
        $Teacher->save();
        return redirect('/teacher/view');
    }
    public function teacherAddByAdmin(){
        $dpt = department::all();
        $url=url('teacherAdd_admin');
        return view('teacherAddByAdmin')->with(compact('dpt','url'));

    }
    public function index()
    {
        $dpt = department::all();
        return view('teacher')->with(compact('dpt'));
    }

    public function insert(Request $request)
    {
        $request->validate(
            [
                'Superviser_name' => 'required|max:255|regex:/^[a-zA-Z_ ]+$/u',
                'email' => 'required|email|unique:tbl_teacher,teacher_email,id,id|max:255|regex:/(.*)@kfueit\.edu.pk/i',
                'teacher_dept' => 'required|integer',
                'Superviser_Image' => 'required|max:10000',
                'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#@%]).*$/',

            ]
        );

        $Teacher = new Teacher();
        $Teacher->teacher_name = $request['Superviser_name'];
        $Teacher->teacher_email = $request['email'];
        $Teacher->dept_id = $request['teacher_dept'];
        $Teacher->teacher_status = 0;
        if ($request->hasFile('Superviser_Image')) {
            $file = $request->file('Superviser_Image');
            $teaser_image = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Student');
            $file->move($destinationPath, $teaser_image);
            $Teacher->image = $teaser_image;
        }
        $Teacher->teacher_password = md5($request['password']);
        $Teacher->save();
        $name = Teacher::where(['teacher_email' => $request['email'], 'teacher_password' => md5($request['password'])])->get();
        // $name=Student_model::where('id',$request['senderid'])->get();
        $teacher = Admin::all();
        Notification::send($teacher, new GiveSuperviserLoginAccessByAdmin($name));

        return redirect('/')->with('success', 'you are successfuly registerd!');
    }
    public function show()
    {
        $Teacher = Teacher::with('getDpt')->paginate();
        $titel = "Superviser";
        return view('teacher_view')->with(compact('Teacher', 'titel'));
    }
    public function status($id, $s)
    {
        Teacher::where('id', $id)->update([
            'teacher_status' => $s
        ]);
        $user = session()->get('user');
        $i = $user->unreadNotifications[0]->id;
        return redirect('adminmarkread/' . $i);
        // return redirect()->back();
    }
    public function edit($id)
    {
        $url = "/teacher/update" . "/" . $id;
        $dpt = department::all();
        $Teacher = Teacher::with('getDpt')->where('id', $id)->get();
        return view('teacher_update')->with(compact('url', 'dpt', 'Teacher'));
    }
    public function update($id, Request $request)
    {
        // return $request;die;
        $img = "";
        if ($request->hasFile('Superviser_Image')) {
            $file = $request->file('Superviser_Image');
            $teaser_image = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/Student');
            $file->move($destinationPath, $teaser_image);
            $img = $teaser_image;
        }
        Teacher::where('id', $id)
            ->update([
                'teacher_name' => $request->input('Superviser_name'),
                'teacher_email' => $request->input('email'),
                'dept_id' => $request->input('teacher_dept'),
                'image' => $img,
                'teacher_password' => md5($request->input('password'))
            ]);
        return redirect('/teacher/view');
    }
    public function delete($id)
    {
        Teacher::where('id', $id)->delete();
        return redirect()->back();
    }
}
