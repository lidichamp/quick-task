<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TaskToDo extends Notification implements ShouldQueue
{
    use Queueable;
    protected $user;
    
        public function __construct(Task $expiry_date)
        {
            $this->expiry_date = $expiry_date;
        }
    
        public function via($notifiable)
        {
            return ['database','mail'];
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
    public function toMail($notifiable)
    {
        $url = url('/warning/'.$this->id);
    
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('One of your task is expiring is less than 24 hours!')
                    ->action('View Task', $url)
                    ->line('Thank you for using Quick Task!');
    }
    public function routeNotificationForMail()
    {
        return $this->email_address;
    }
}
