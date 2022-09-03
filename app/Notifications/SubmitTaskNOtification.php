<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubmitTaskNOtification extends Notification
{
    use Queueable;
    public $name;
    public $student;
    public $taskid;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender,$student,$taskid)
    {
        $this->name=$sender;
        $this->student=$student;
        $this->taskid=$taskid;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toArray($notifiable)
    {
        return [
            'heading'=>'Task notification',
            'name'=>$this->name[0]->std_name,
            'email'=>$this->name[0]->email,
            'id'=>$this->name[0]->id,
            'proname'=>$this->student[0]->proj_id,
            'description'=>$this->student[0]->description,
            'team'=>null,
            'taskid'=>$this->taskid,
            'url'=>'all_teacher_notification',
        ];
    }
}
