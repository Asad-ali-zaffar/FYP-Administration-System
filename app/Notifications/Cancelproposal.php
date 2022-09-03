<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Cancelproposal extends Notification implements ShouldQueue
{
    use Queueable;
    public $sender;
    public $description;
    public $title;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender,$description,$title)
    {
        $this->sender=$sender;
        $this->description=$description;
        $this->title=$title;
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
            'heading'=>$this->title,
            'id'=>$this->sender,
            'name'=>$this->description,
            'url'=>'cancle_notification',
        ];
    }
}
