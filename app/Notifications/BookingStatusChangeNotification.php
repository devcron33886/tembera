<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingStatusChangeNotification extends Notification
{
    use Queueable;

    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your '.config('app.name').'status')
            ->line('Your booking status was changed to '.$this->status)
            ->line('Thank you for using our application!');
    }
}
