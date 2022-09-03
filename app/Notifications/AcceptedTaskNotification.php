<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptedTaskNotification extends Notification
{
    use Queueable;
    public $senderid;
    public $projId;
    public $taskid;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $senderid,$proj_name,$taskid)
    {
        $this->senderid=$senderid;
        $this->projId=$proj_name;
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
            'name'=>'your Task is accepted',
            'email'=>'',
            'id'=>$this->senderid,
            'proname'=>$this->projId,
            'description'=>"",
            'team'=>null,
            'taskid'=>$this->taskid,
            'url'=>'all_teacher_notification',
        ];
    }
}
