<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notifiable;

class SendRequstNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $name;
    public $projact;
    public $description;
    public $team;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name,$pro_name,$description,$team)
    {
        $this->name=$name;
        $this->projact=$pro_name;
        $this->description=$description;
        $this->team=$team;
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
            'heading'=>'New FYP proposal',
            'name'=>$this->name[0]->std_name,
            'email'=>$this->name[0]->email,
            'id'=>$this->name[0]->id,
            'proname'=>$this->projact,
            'description'=>$this->description,
            'team'=>$this->team,
            'url'=>'fyp_proposal',
        ];
    }
}
