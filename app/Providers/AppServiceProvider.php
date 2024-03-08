<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.dashboard', function ($view) {
            $usersCount = User::count();
            $mostReservedEventId = null;
            $mostReservedEventName = null;

            if (Auth::user()->type == 'organiser') {
                $userId = Auth::id();
                $events = Event::where('user_id', $userId)->get();
                $eventCount = $events->count();
                $eventIds = $events->pluck('id')->toArray();
                $reservationCount = Reservation::whereIn('event_id',$eventIds)->count();
                $reservationsCountPerEvent = Reservation::whereIn('event_id', $eventIds)
                    ->select('event_id', \DB::raw('count(*) as reservations_count'))
                    ->groupBy('event_id')
                    ->get();
                $mostReservedEvent = $reservationsCountPerEvent->max('reservations_count');
                if (!$reservationsCountPerEvent->isEmpty()) {
                    $mostReservedEventId = $reservationsCountPerEvent->where('reservations_count', $mostReservedEvent)
                        ->first()['event_id'];
                    $mostReservedEventName = Event::find($mostReservedEventId)->title;
                }
            } else {
                $eventCount = Event::count();
                $reservationCount = Reservation::count();
                $reservationsCountPerEvent = Reservation::select('event_id', \DB::raw('count(*) as reservations_count'))
                    ->groupBy('event_id')
                    ->get();
                $mostReservedEvent = $reservationsCountPerEvent->max('reservations_count');
                if (!$reservationsCountPerEvent->isEmpty()) {
                    $mostReservedEventId = 1; // Example default value
                    $mostReservedEventName = Event::find($mostReservedEventId)->title;
                }
            }

            $view->with([
                'usersCount' => $usersCount,
                'eventCount' => $eventCount ?? null,
                'reservationCount' => $reservationCount ?? null,
                'mostReservedEventCount' => $mostReservedEvent ?? null,
                'mostReservedEvent' => $mostReservedEventName
            ]);
        });
    }
}
