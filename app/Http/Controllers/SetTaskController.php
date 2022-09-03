<?php

namespace App\Http\Controllers;

use App\Models\SetTask;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Projact;
use App\Models\Student_model;
use App\Models\Teacher;
use App\Notifications\SendShaduleNotification;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SubmitTaskNOtification;

class SetTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=session()->get('profile_data');
        // $projact=Projact::with('getStudent')->get();
        $task=SetTask::with('getProject')->where('createBy',$user[0]->id)->get();
        return view('Set_Schedule',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=session()->get('profile_data');
        $projact=Projact::with('getStudent')->where('superviser_id',$user[0]->id)->get();
        return view('create_newTask',compact('projact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'projact'=>'required',
            'description'=>'required',
        ]);
        $s=session()->get('profile_data');
        $senderid=$s[0]->id;
        $task=new SetTask;
        $task->title=$request->title;
        $task->description=$request->description;
        $task->status="unopen";
        $task->proj_id=$request->projact;
        $task->createBy=$s[0]->id;
        $task->save();
        $sender=SetTask::where(['title'=>$request->title,'proj_id'=>$request->projact])->get();
        $pid=$sender[0]->proj_id;
        $projact=Projact::where('proj_id',$pid)->get();
        $id=$projact[0]->id;
        $received=Student_model::where('id',$id)->get();
        Notification::send($received,new SendShaduleNotification($sender,$projact,$senderid));
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SetTask  $setTask
     * @return \Illuminate\Http\Response
     */

    public function send_again($id){
        // return $id;
          $user=session()->get('user');
        //    $user=session()->get('user');
           // $received=Teacher::where('id',$user->notifications[0]->data['senderid'])->get();
        //    $task=SetTask::where('',$id);
    //        $url=url('task/save'."/".$id);
    //        $senderid=$user->notifications[0]->data['senderid'];
    //        $heading=$user->notifications[0]->data['heading'];
    //    $url=$user->Notifications;
        // return view('student.open_task',compact('task','url','senderid','heading'));
        return view('student.send_again');
    }
    public function cancle_noti($id){
        $user=session()->get('user');
        $url=$user->Notifications[0]->data['url'];
        return view('student.rejacted_proposal');
    }
    public function all_noti($id=null){
        // return $id;
        if(is_null($id))
        {
            return redirect()->back()->with('fail','No task Assined you');
        }
       $user=session()->get('user');
        $url=$user->Notifications[0]->data['url'];
        $sid=$user->Notifications[0]->data['senderid'];
        $task= SetTask::where(['proj_id'=>$id])->with('getProject')->get();
        return view('student.task_shadule',compact('task','id','sid'));
    }
    public function all_notify($id){

       $user=session()->get('user');
        // $url=$user->Notifications[0]->data['url'];
        // $sid=$user->Notifications[0]->data['id'];
        // $task= SetTask::where(['proj_id'=>$id])->with('getProject')->get();
        return view('student.Send_working_onTask',compact('id'));
    }
    public function marked($id){
        $user=session()->get('user');
        $user->unreadNotifications->where('id',$id)->markAsRead();
        $idd=$user->unreadNotifications[0]->data['id'];
        session()->put(['m'=>count($user->unreadNotifications)]);
        $url=$user->unreadNotifications[0]->data['url'];
        // return redirect()->back();
        return redirect($url.'/'.$idd);
    }
    public function show($id=null)
    {

       $user=session()->get('user');

        $title="";
        $projact_id="";
        $id="";
        $sid="";
     foreach ($user->Notifications as $notification)
        {
           $title=$notification->data['heading'];
             $projact_id=$notification->data['id'];
                // $projact_id=$notification->notifiable_id;
                $id=$notification->data['id'];
                $sid=$notification->data['senderid'];
                // $sid=$user->Notifications[0]->data[''];
        }

        // $id=$user->notifications[0]->data['id'];
    $task= SetTask::where(['proj_id'=>$projact_id])->with('getProject')->get();
        if(count($task)>0)
        {
            // return redirect('/student_login');
            return view('student.task_shadule',compact('task','id','sid'));
        }
        else{
            return redirect()->back()->with('fail','No task Assined you');
        }

    }


    public function edit($id)
    {
        $projact=Projact::with('getStudent')->get();
        $task=SetTask::findorFail($id);
        return view('edit_task',compact('task','projact'));
    }


    public function update(Request $request, $id)
    {
        $task=SetTask::findorFail($id);
        $request->validate([
            'title'=>'required',
            'projact'=>'required',
            'description'=>'required',
        ]);
        SetTask::where('id',$id)->update([            
            'status'=>'working',
        ]);
        $s=session()->get('profile_data');
        $senderid=$s[0]->id;
        $task->title=$request->title;
        $task->description=$request->description;
        $task->status=$request->status;
        $task->proj_id=$request->projact;
        $task->save();
        $sender=SetTask::where(['title'=>$request->title,'proj_id'=>$request->projact])->get();
        $pid=$sender[0]->proj_id;
        $projact=Projact::where('proj_id',$pid)->get();
        $id=$projact[0]->id;
        $received=Student_model::where('id',$id)->get();
        Notification::send($received,new SendShaduleNotification($sender,$projact,$senderid));
        return redirect()->route('task.index');
    }


    public function destroy($id)
    {

        $task=SetTask::findorFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }
     public function openTask($id){
        // return $id;
       $user=session()->get('user');
        // $received=Teacher::where('id',$user->notifications[0]->data['senderid'])->get();
        $task=SetTask::findorFail($id);
        $url=url('task/save'."/".$id);
        $senderid=$user->notifications[0]->data['senderid'];
        $heading=$user->notifications[0]->data['heading'];
        
        // $notification = auth()->user()->notifications()->where('id', $id)->first();

        return view('student.open_task',compact('task','url','senderid','heading'));
     }
     public function submitTask($id,Request $request){
        // return $request;
        $request->validate([
            'supervisor'=>'required|integer',
            'discription'=>'required',
        ]);
        $task=SetTask::where('id',$id)->update([            
            'status'=>'working',
            'description'=>$request->discription
        ]);
        $taskid=$id;
      $sender=SetTask::where(['id'=>$request->senderid,'proj_id'=>$request->projactid])->get();
         $pid=$sender[0]->proj_id;
        $projact=Projact::where('proj_id',$pid)->get();
        $id=$projact[0]->id;
         $student=Student_model::where('id',$id)->get();
         $received=Teacher::where('id',$request->supervisor)->get();
         Notification::send($received,new SubmitTaskNOtification($student,$sender,$taskid));
        return redirect('task/show');
     }
     public function acceptedProposalStd($id){
        // return $id;
      $user = session()->get('user');
         $proname=$user->notifications[0]->data['name'];
          $std_id=$user->notifications[0]->notifiable_id;
           $sender=$user->notifications[0]->data['projname'];
            $heading=$user->notifications[0]->data['heading'];
            $superviser_id=$user->notifications[0]->data['id'];
            $updated_at=$user->notifications[0]->created_at;
            $createdated_at=$user->notifications[0]->updated_at;
        $pro=new Projact;
        $pro->proj_name=$proname;
        $pro->id=$std_id;
        $pro->superviser_id=$superviser_id;
        $pro->save();
        return view('student.accept_proposal',compact('proname','std_id','sender','heading','updated_at','createdated_at'));


    }

}

