<?php

namespace App\Http\Controllers;

use App\Models\notifiy;
use Illuminate\Http\Request;
use App\Models\Student_model;
use App\Models\FypParposal;
use App\Models\SetTask;

use Illuminate\Support\Facades\Notification;
use App\Notifications\SubmitTaskNOtification;
use App\Notifications\SendShaduleNotification;
use App\Notifications\Cancelproposal;
use App\Notifications\Send_againNotification;
use App\Notifications\SendRequstNotification;
use App\Notifications\AcceptFypProposal;
use App\Notifications\AcceptedTaskNotification;
use App\Models\department;

use App\Models\Teacher;
use PhpParser\Node\Stmt\Return_;

class notifiycontroller extends Controller
{

    public function teacherLoginAccess($id)
    {
        $user = session()->get('user');
        $user->unreadNotifications->where('id', $id)->markAsRead();
        $id = $user->Notifications[0]->notifiable_id;
        $url = $user->Notifications[0]->data['url'];
        $id = $user->Notifications[0]->id;
        return redirect($url . '/' . $id);
    }
    public function CancelaccessbyAdmin($id)
    {
        notifiy::where('id', $id)->delete();
        return redirect('/admin_dashboard');
    }
    public function Cancel_access($id)
    {

        notifiy::where('id', $id)->delete();
        return redirect('/superviser');
    }
    public function accepted_access($id)
    {
        $user = session()->get('user');
        $user->unreadNotifications->where('id', $id)->markAsRead();
        // session()->put(['m'=>count($user->unreadNotifications)]);
        $id = $user->Notifications[0]->data['id'];
        // return redirect('/superviser');
        Student_model::where('id', $id)
            ->update([
                'std_status' => 1,
            ]);

        return redirect('/superviser');
    }
    public function access_allow($id)
    {

        $user = session()->get('user');
        $id = $user->Notifications[0]->data['id'];

        Teacher::where('id', $id)
            ->update([
                'teacher_status' => 1,
            ]);
        return redirect('/admin_dashboard');
    }
    public function login_access($id)
    {
        $user = session()->get('user');
        $user->unreadNotifications->where('id', $id)->markAsRead();
        return view('Admin.getaccess', compact('id'));
    }
    public function getaccess($id)
    {
        return view('getaccess', compact('id'));
    }
    public function send_again_byStudent($id)
    {
        $url = url('send_again_byStudent');
        // "heading":"Online Learning","id":"4","senderid":"4","name":"send again","team":null,"taskid":"40","url":"send_again"
        $user = session()->get('user');
        $student = Student_model::all();
        return view('student.send_again_byStudent', compact('url', 'student'));
    }
    public function sendagainByStuent(Request $request)
    {
        return $request;
        $request->validate([
            'discription' => 'required',
        ]);

        $title = $request->projact;
        $tosend = $request->tosend;
        $sender = $request->senderid;
        $team = $request->project_partner;
        $description = $request->description;
        $pro_name = "";
        if (is_null($request->project_partner)) {
            $team = null;
        } else {
            $pro_name = $request->project_partner;
        }

        $name = Student_model::where('id', $request['senderid'])->get();
        $teacher = Teacher::where('id', $tosend)->get();
        Notification::send($teacher, new SendRequstNotification($name, $pro_name, $description, $team));

        $received = Student_model::where('id', $tosend)->get();
        Notification::send($received, new Send_againNotification($sender, $description, $title, $team));
        return redirect('/student_login');
    }
    public function send_again($id, Request $request)
    {
          $user = session()->get('user');
           $received=$user->notifications[0]->data['senderid'];
        // return $request;"taskid":"40","title":"Online Learning","tosend":"4","senderid":"2","description":"send again","files":null
        $title = $request->title;
        $tosend  = $request->tosend;
        $sender = $request->senderid;
        $team = $request->team;
         $taskid = $request->taskid;
        $description = $request->description;
        
        $received = Student_model::where('id', $tosend)->get();
        notifiy::where('id', $id)->delete();
        Notification::send($received, new Send_againNotification($sender, $description, $title,$taskid));
        
        return redirect()->back()->with('success','your Data is success fully submit!!');
    }
    public function destory($id)
    {
        notifiy::where('id', $id)->delete();
        return redirect()->back();
    }
    public function mark($id = null)
    {
        $user = session()->get('user');
        $user->unreadNotifications->where('id', $id)->markAsRead();
        $idd = $user->unreadNotifications[0]->notifiable_id;
        session()->put(['m' => count($user->unreadNotifications)]);
        return redirect('task/show/' . $idd);
    }
    public function delete($id, Request $request)
    {
        // return $request;
        $count = count($request->all());
        if ($count > 5) {
            $title = $request->title;
            $tosend = $request->tosend;
            $sender = $request->senderid;
            $team = $request->team;
            $i = count($team);
            $description = $request->description;
            $m = 0;
            foreach ($team as $tem) {
                if ($m == $i) {
                    break;
                }
                if ($m == 0) {
                    $received = Student_model::where('id', $tem)->get();
                    Notification::send($received, new Cancelproposal($sender, $description, $title));
                } elseif ($m == 1) {
                    $received = Student_model::where('id', $tem)->get();
                    Notification::send($received, new Cancelproposal($sender, $description, $title));
                } elseif ($m == 2) {
                    $received = Student_model::where('id', $tem)->get();
                    Notification::send($received, new Cancelproposal($sender, $description, $title));
                } else {
                    break;
                }
                $m++;
            }
        } else {
            $title = $request->title;
            $tosend = $request->tosend;
            $sender = $request->senderid;
            $description = $request->description;
        }
        $received = Student_model::where('id', $tosend)->get();
        Notification::send($received, new Cancelproposal($sender, $description, $title));
        notifiy::where('id', $id)->delete();
        FypParposal::where(['senderId'=>$sender,'receiverId'=>$tosend])->delete();

        return redirect('/superviser');
    }
    public function supervisor_acceptTask($id)
    {
        
    }
    public function acceptedTask($id)
    {
       
          $user = session()->get('user');
          $taskid = $user->notifications[0]->data['taskid'];
          $description = $user->notifications[0]->data['description'];
           $proj_name = $user->notifications[0]->data['proname'];
           $received = $user->notifications[0]->data['id'];
            //  return   $name = $user->notifications[0]->data['name'];
         $team = $user->notifications[0]->data['team'];
          $senderid = $user->notifications[0]->notifiable_id;
         SetTask::where('id',$taskid)->update([            
            'description'=>$description,
            'status'=>'done',
        ]);
         
        notifiy::where('id',$id)->delete();
        //   Notification::send($received, new AcceptFypProposal($senderid, $taskid, $proj_name));
    
          return redirect()->back()->with('success','Task is success fully accepted!!');
       
    }
    public function accepted($id)
    {
        // return $id;
        $user = session()->get('user');
        $proj_name = $user->notifications[0]->data['proname'];
        $std_id = $user->notifications[0]->data['id'];
        $name = $user->notifications[0]->data['name'];
        $team = $user->notifications[0]->data['team'];
        $senderid = $user->notifications[0]->notifiable_id;
        $received = Student_model::where('id', $std_id)->get();
        
        Notification::send($received, new AcceptFypProposal($senderid, $name, $proj_name));
    
        $i = count($team);
        $m = 0;
        foreach ($team as $tem) {
            if ($m == $i) {
                break;
            }
            if ($m == 0) {
                $received = Student_model::where('id', $tem)->get();
                Notification::send($received, new AcceptFypProposal($senderid, $name, $proj_name));
            } elseif ($m == 1) {
                $received = Student_model::where('id', $tem)->get();
                Notification::send($received, new AcceptFypProposal($senderid, $name, $proj_name));
            } elseif ($m == 2) {
                $received = Student_model::where('id', $tem)->get();
                Notification::send($received, new AcceptFypProposal($senderid, $name, $proj_name));
            } else {
                break;
            }
            $m++;
        }
        return redirect('/superviser');
    }
}
