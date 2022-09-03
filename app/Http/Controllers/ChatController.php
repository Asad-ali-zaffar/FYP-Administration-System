<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Teacher;
use App\Models\Admin;
use App\Models\Student_model;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    // public function index(){
    //     return view('chat');
    // }
    // public function insert(Request $request){
    //     $chat= new Chat();
    //     $chat->chat_message=$request['val-username'];
    //     $chat->sender=$request['sender'];
    //     $chat->reciver=$request['reciver'];
    //     $chat->save();
    //     return redirect('/chat/view');
    // }
   public function chatApp_std(Request $request)
   {
    $users= session()->get('profile_data');
    $id="";
   foreach($users as $idd){
       $id=$idd->id;
   }
//    return $id;
    // $users = DB::table('admin')
    // ->join('Teacher','Teacher.reg_id','admin.admin_id')
    // ->where([ 'status'=>1, 'sender_id'=>$id])->get();


    session()->put(['chat' => $users]);
     $check = session()->get('chat');
   $teacher=Teacher::all();
   return view('student.Selectaccount_std')->with(compact('users', 'check', 'teacher'));
   }
   public function chatApp_teacher(Request $request)
   {
    $users= session()->get('profile_data');
    $id="";
   foreach($users as $idd){
       $id=$idd->id;
   }
//    return $id;
    // $users = DB::table('admin')
    // ->join('Teacher','Teacher.reg_id','admin.admin_id')
    // ->where([ 'status'=>1, 'sender_id'=>$id])->get();


    session()->put(['chat' => $users]);
     $check = session()->get('chat');
   $teacher=Admin::all();
   $std=Student_model::all();
    // $checkstatus=DB::table('teamrequests')->where('status',1)->get();
    return view('Selectaccount_teacher')->with(compact('users','std', 'check', 'teacher'));
   }
   public function chatApp(Request $request)
    {

        $users= session()->get('profile_data');
        $id="";
       foreach($users as $idd){
           $id=$idd->id;
       }
    //    return $id;
        // $users = DB::table('admin')
        // ->join('Teacher','Teacher.reg_id','admin.admin_id')
        // ->where([ 'status'=>1, 'sender_id'=>$id])->get();


        session()->put(['chat' => $users]);
         $check = session()->get('chat');
       $teacher=Teacher::where('teacher_status',1)->get();
        // $checkstatus=DB::table('teamrequests')->where('status',1)->get();

        return view('Admin.Selectaccount')->with(compact('users', 'check', 'teacher'));
    }
    public function chatApptwo_stdTotch($id){
        $users= session()->get('profile_data');
        $fromuser=$users[0]->id;
        $teacher=Teacher::where('id',$id)->get();
        $home =   session()->put(['UserTwo' => $id]);
        $usertwo =   session()->get('UserTwo');

// $name=DB::table('registrations')->where('reg_id', $id)->get();
    $name=Student_model::where('id', $fromuser)->get();
// return isset($sender_id);

        if (isset($fromuser)) {


             $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>2])->orWhere('FromUser',$id)->where('ToUser',$fromuser)->where('Roll',2)->get();
        } else {
            $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>2])->orWhere(['ToUser' => $fromuser, 'FromUser' => $id,'Roll'=>2])->get();

        }
        return view('student.chatboxteacherStd')->with(compact('fromuser', 'chats', 'id', 'teacher','name'));
    }
    public function chatApptwo_tchTostd($id)
    {
        $users= session()->get('profile_data');
        $fromuser=$users[0]->id;
        $teacher=Student_model::where('id',$id)->get();
        $home =   session()->put(['UserTwo' => $id]);
        $usertwo =   session()->get('UserTwo');

// $name=DB::table('registrations')->where('reg_id', $id)->get();
    $name=Teacher::where('id', $fromuser)->get();
// return isset($sender_id);

        if (isset($fromuser)) {

            // $chats=Chat::where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>2])->get();
             $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>2])->orWhere('FromUser',$id)->where('ToUser',$fromuser)->where('Roll',2)->get();
        } else {
             $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id, 'Roll'=>2])->orWhere(['ToUser' => $fromuser, 'FromUser' => $id ,'Roll'=>2])->get();

        }
        return view('chatboxteacherStd')->with(compact('fromuser', 'chats', 'id', 'teacher','name'));
    }
    public function chatApptwo_tch($id)
    {
        $users= session()->get('profile_data');
        $fromuser=$users[0]->id;
        $teacher=Admin::where('id',$id)->get();
        $home =   session()->put(['UserTwo' => $id]);
        $usertwo =   session()->get('UserTwo');

// $name=DB::table('registrations')->where('reg_id', $id)->get();
    $name=Teacher::where('id', $fromuser)->get();
// return isset($sender_id);

        if (isset($fromuser)) {


             $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>1])->orWhere('FromUser',$id)->where('ToUser',$fromuser)->where('Roll',1)->get();
        } else {
            $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>1])->orWhere(['ToUser' => $fromuser, 'FromUser' => $id,'Roll'=>1])->get();

        }
        return view('chatboxteacher')->with(compact('fromuser', 'chats', 'id', 'teacher','name'));

    }
    public function chatApptwo($id)
    {
        $users= session()->get('profile_data');
        $fromuser=$users[0]->id;
        $teacher=Teacher::where('id',$id)->get();
        $home =   session()->put(['UserTwo' => $id]);
        $usertwo =   session()->get('UserTwo');

// $name=DB::table('registrations')->where('reg_id', $id)->get();
    $name=Admin::where('id', $fromuser)->get();
// return isset($sender_id);

        if (isset($fromuser)) {


             $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id ,'Roll'=>1])->orWhere('FromUser',$id)->where('ToUser',$fromuser)->where('Roll',1)->get();
        } else {
            $chats = DB::table('chat')->where(['FromUser' => $fromuser, 'ToUser' => $id,'Roll'=>1])->orWhere(['ToUser' => $fromuser, 'FromUser' => $id,'Roll'=>1])->get();

        }
        return view('Admin.chatboxone')->with(compact('fromuser', 'chats', 'id', 'teacher','name'));
    }

    public function sendmessagestdtoTeacher(Request $request){

        $register = new Chat();
        $register->FromUser = $request->fromuser;
        $register->ToUser = $request->toUser;
        $register->Messages = $request->message;
        $register->Roll = 2;
        // return $request;
        $register->save();
        return redirect()->back();
    }
    public function sendmessageTeachertostd(Request $request)
    {
        $register = new Chat();
        $register->FromUser = $request->fromuser;
        $register->ToUser = $request->toUser;
        $register->Messages = $request->message;
        $register->Roll = 2;
        // return $request;
        $register->save();
        return redirect()->back();
    }
    public function sendmessageTeacher(Request $request)
    {
        $register = new Chat();
        $register->FromUser = $request->fromuser;
        $register->ToUser = $request->toUser;
        $register->Messages = $request->message;
        $register->Roll = 1;
        // return $request;
        $register->save();
        return redirect()->back();
    }
    public function sendmessage(Request $request)
    {

        $register = new Chat();
        $register->FromUser = $request->fromuser;
        $register->ToUser = $request->toUser;
        $register->Messages = $request->message;
        $register->Roll = 1;
        // return $request;
        $register->save();
        return redirect()->back();
    }



}
