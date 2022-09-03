<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AnnouncementByAdmin extends Notification implements ShouldQueue
{
    use Queueable;
    public $id;
    public $heading;
    public $url;
    public $description;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender,$description,$url,$heading)
    {
        $this->id=$sender;
        $this->heading=$heading;
        $this->description=$description;
        $this->url=$url;
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
           'heading'=>$this->heading,
            'name'=>"HOD",
            'description'=>$this->description,
            'email'=>"Sending by Department head",
            'id'=>$this->id,
            'url'=>$this->url,
               ];
    }
}
