<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendShaduleNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $name;
    public $title;
    public $senderid;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender,$projact,$senderid)
    {
        $this->name=$sender;
        $this->title=$projact;
        $this->senderid=$senderid;
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



    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'heading'=>$this->title[0]->proj_name,
            'id'=>$this->title[0]->proj_id,
            'senderid'=>$this->senderid,
            'name'=>$this->name[0]->title,
            'url'=>'all_notification',
        ];
    }
}
