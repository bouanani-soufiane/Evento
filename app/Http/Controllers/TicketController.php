<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(User $user)
    {
        $tickets = Reservation::where('user_id', $user->id)->get();

        return view('ticket',compact('tickets'));
    }
}
