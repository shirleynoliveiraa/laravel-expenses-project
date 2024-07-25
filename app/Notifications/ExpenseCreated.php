<?php

namespace App\Notifications;

use App\Models\Expense;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ExpenseCreated extends Notification implements ShouldQueue
{
    use Queueable;

    protected $expense;

    public function __construct(Expense $expense)
    {
        $this->expense = $expense;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Despesa Cadastrada')
                    ->line('Uma nova despesa foi cadastrada.')
                    ->action('Ver Despesa', url('/expenses/' . $this->expense->id))
                    ->line('Obrigado por usar nossa aplicação!');
    }
}

