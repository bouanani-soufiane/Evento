<?php

namespace App\Services;

use App\Mail\ReservationMail;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;

/**
 * Class EmailService.
 */
class EmailService
{
    public function __construct(public ReservationMail $reservationMail)
    {

    }

    public function sendMail(Reservation $reservation)
    {
        $reservation->load('user');
        $email = $reservation->user->email;


        $this->reservationMail->setBooking($reservation);
        Mail::to($email)->send($this->reservationMail);
    }
}
