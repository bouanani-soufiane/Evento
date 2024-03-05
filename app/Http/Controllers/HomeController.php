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
    public function index(Request $request)
    {

        $events = Event::FilterSearch(request(['search', 'filter']))->get();

        $categories = Category::all();

        return view('welcome', compact('categories', 'events'));
    }


}
