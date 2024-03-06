<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\reservation;
use App\trait\ImageUpload;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('category')
            ->orderBy('id', 'asc')
            ->paginate(5);
        $categories = Category::all();

        return view("organisateur.events", compact('events', 'categories'));
    }

    public function show(Event $event)
    {
        $place = reservation::where('event_id',$event->id)->count();
        return view('single_event',compact('event','place'));
    }

    public function store(EventRequest $request)
    {

        try {
            $validatedData = $request->validated();
            $event = Event::create($validatedData);
            $this->storeImg($event, $request->file('image'));

            return redirect()->back()->with("success", "événement créée avec succès.");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur imprévue s'est produite!.");
        }
    }


    public function update(EventRequest $request, Event $event)
    {

        try {
            $validatedData = $request->validated();
            $event->update($validatedData);
            $this->updateImg($event, $request->file('image'));
            return redirect()->back()->with("success", "événement mise à jour avec succès!.");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la mise à jour d'événement!.");
        }
    }

    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return redirect()->back()->with("success", "Evénement supprimée avec succès!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la suppression de l'événement!.");
        }
    }

    public function verify(Request $request, Event $event)
    {
        try {
            $value = $request->oldValue ? true : false;
            $event->isVerified = $value;
            $event->save();

            return redirect()->back()->with("success", "Événement vérifié avec succès!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la vérification de l'événement.");
        }
    }

}
