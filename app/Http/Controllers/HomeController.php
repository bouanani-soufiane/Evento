<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Event;
use App\Models\Organiser;
use App\Models\Participant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $events = Event::where('isVerified' , true)->paginate(6);

        $categories = Category::all();

        return view('welcome', compact('categories', 'events'));
    }

    public function search(Request $request)
    {
        $search = $request->query('search');
        $filterSearch =  ['search' => $search] ;

        $events = Event::FilterSearch($filterSearch)->get();

        return response()->json(['events' => $events,]);
    }


}
