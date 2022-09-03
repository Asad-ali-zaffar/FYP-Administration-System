<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Send_againNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $sender;
    public $description;
    public $taskid;
    public $title;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender,$description,$title,$taskid)
    {
        $this->sender=$sender;
        $this->description=$description;
        $this->title=$title;
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
            'heading'=>"Send Again Task",
            'id'=>$this->taskid,
            'senderid'=>$this->sender,
            'name'=>$this->description,
            'taskid'=>$this->taskid,
            'team'=>null,            
            'url'=>'send_again_teacher',
        ];
    }
}
