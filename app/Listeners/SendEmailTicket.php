<?php

namespace App\Listeners;

use App\Events\Reserved;
use App\Services\EmailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailTicket
{
    /**
     * Create the event listener.
     */
    public function __construct(public EmailService $emailService)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Reserved $event): void
    {
//        dd($event->reservation);
        $this->emailService->sendMail($event->reservation);
    }
}
