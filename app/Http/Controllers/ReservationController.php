<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Event;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; // Import the DB facade at the top of your file

class ReservationController extends Controller
{

    public function store(ReservationRequest $request)
    {
        $reservation_count = Reservation::where('event_id', $request->event_id)->count();
        $total_place = Event::where('id', $request->event_id)->value('totalPlace');

        $place_left = $total_place - $reservation_count;

        try {
            if ($place_left > 0 &&  $request->quantity <= $place_left ) {
                DB::beginTransaction();

                for ($i = 0; $i < $request->quantity; $i++) {
                    $reservation = new Reservation();
                    $reservation->isConfirmed = $request->isConfirmed;
                    $reservation->user_id = Auth::id();
                    $reservation->event_id = $request->event_id;
                    $reservation->save();
                }

                DB::commit();
                return redirect()->back()->with("success", "Réservation créée avec succès.");
            } else {
                return redirect()->back()->with("error", "Il n'y a pas suffisamment de places disponibles.");
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with("error", "Une erreur est survenue lors de la création de la réservation.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
