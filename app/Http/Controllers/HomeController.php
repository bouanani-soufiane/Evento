<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(3);
        $events = Event::with('category')
            ->orderBy('id', 'asc')
            ->paginate(4);
        return view('welcome', compact('categories','events'));
    }

}
