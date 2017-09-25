<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TaskToDo extends Notification
{
    use Queueable;
    protected $follower;
    
        public function __construct(Task $expiry_date)
        {
            $this->expiry_date = $expiry_date;
        }
    
        public function via($notifiable)
        {
            return ['database'];
        }
    
        public function toDatabase($notifiable)
        {
            return [
                'expiry_date' => $this->expiry_date,
                'today' => Carbon::now(),
            ];
        }
    /**
     * Create a new notification instance.
     *
     * @return void
     */
 
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
   

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
