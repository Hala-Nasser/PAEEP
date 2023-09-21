<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewVolunteerRequestNotification extends Notification
{
    use Queueable;

    protected $applier_fullname;
    protected $request_id;
    /**
     * Create a new notification instance.
     */
    public function __construct($applier_fullname, $request_id)
    {
        $this->applier_fullname = $applier_fullname;
        $this->request_id = $request_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'notifications.volunteer_req_title',
            'applier_fullname' => $this->applier_fullname,
            'message' => 'notifications.volunteer_req_message',
            'request_id' => $this->request_id
        ];
    }
}
