<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $reservation;
    public function __construct()
    {

    }
    public function setBooking(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }


    public function build()
    {
        $data = [];
        $data['username'] = $this->reservation->user->name;
        $data['title'] = $this->reservation->event->title;
        $data['price'] = $this->reservation->event->price;
        $data['local'] = $this->reservation->event->localisation;
        $data['date'] = $this->reservation->event->date;
        $data['tikcetId'] = $this->reservation->id;


        return $this->view('pdf_ticket',[
            "data" => $data
        ])
            ->subject("hello");

    }
}
