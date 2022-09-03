<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class givestudentLoginaccess extends Notification implements ShouldQueue
{
    use Queueable;
    public $name;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name=$name;
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
            'heading'=>'Allow login access',
            'name'=>$this->name[0]->std_name,
            'email'=>$this->name[0]->email,
            'id'=>$this->name[0]->id,
            'url'=>'getaccess',
        ];
    }
}
