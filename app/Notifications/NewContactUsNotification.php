<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContactUsNotification extends Notification
{
    use Queueable;

    protected $sender_fullname;
    protected $request_id;
    /**
     * Create a new notification instance.
     */
    public function __construct($sender_fullname, $request_id)
    {
        $this->sender_fullname = $sender_fullname;
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
            'title' => 'notifications.contact_us_title',
            'applier_fullname' => $this->sender_fullname,
            'message' => 'notifications.contact_us_message',
            'request_id' => $this->request_id
        ];
    }
}
