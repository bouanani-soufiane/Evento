<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function revokeReservation(User $user)
    {
        $user->revokePermissionTo('make reservation');
        return redirect()->back()->with('success' , 'réservation révoquée avec succès');
    }
    public function giveReservation(User $user)
    {
        $user->givePermissionTo('make reservation');
        return redirect()->back()->with('success' , 'réservation ajoutée avec succès');
    }
}
