<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Reservation::where('user_id', Auth::id())
            ->where('isConfirmed', 'true')
            ->get();
        $ticketsPendingCount = Reservation::where('user_id', Auth::id())
            ->where('isConfirmed', 'false')
            ->count();

        return view('ticket', compact('tickets', 'ticketsPendingCount'));
    }
}
