<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptFypProposal extends Notification implements ShouldQueue
{
    use Queueable;
    public $senderid;
    public $name;
    public $projname;
    public $url;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($senderid,$name,$proj_name)
    {
        $this->senderid=$senderid;
        $this->name=$name;
        $this->projname=$proj_name;
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
           'heading'=>'Accepted your proposal',
           'projname'=>$this->name,
           'name'=>$this->projname,
           'id'=>$this->senderid,
           'url'=>'accepted_Proposal',
        ];
    }
}
