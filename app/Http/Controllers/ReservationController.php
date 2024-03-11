<?php

namespace App\Http\Controllers;

use App\Events\Reserved;
use App\Http\Requests\ReservationRequest;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function show($id)
    {
        $events = Event::where('user_id', $id)->where('reservationType', 'manual')->pluck('id');
        $reservations = Reservation::whereIn('event_id', $events)->get();


        return view("organisateur.reservation", compact('reservations'));
    }

    public function store(ReservationRequest $request)
    {
        $reservation_count = Reservation::where('event_id', $request->event_id)->count();
        $total_place = Event::where('id', $request->event_id)->value('totalPlace');
        $reservationType = Event::where('id', $request->event_id)->value('reservationType');


        $place_left = $total_place - $reservation_count;

        try {
            if ($place_left > 0 && $request->quantity <= $place_left) {
                DB::beginTransaction();

                for ($i = 0; $i < $request->quantity; $i++) {
                    $reservation = new Reservation();
                    $reservation->isConfirmed = $request->isConfirmed;
                    $reservation->user_id = Auth::id();
                    $reservation->event_id = $request->event_id;
                    $reservation->save();
                }

                DB::commit();

                if ($reservationType->value == 'manual') {
                    return redirect()->back()->with("success", "veuillez attendre la confirmation de l'organisateur.");
                } else {
                    Reserved::dispatch($reservation);
                    return redirect()->back()->with("success", "Réservation créée avec succès.");

                }

            } else {
                return redirect()->back()->with("error", "Il n'y a pas suffisamment de places disponibles.");
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with("error", "Une erreur est survenue lors de la création de la réservation.");
        }
    }

    public function valider(Reservation $reservation)
    {
        try {
            $reservation->isConfirmed = true;
            $reservation->save();

            return redirect()->back()->with("success", "Réservation validée avec succès!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Un erreur s'est produite lors de la validation du réservation.");
        }
    }

    public function decline(reservation $reservation)
    {
        try {
            $reservation->isConfirmed = false;
            $reservation->save();

            return redirect()->back()->with("success", "Réservation décliné avec succès!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Un erreur s'est produite lors de l'annulation de la réservation");
        }
    }
}
