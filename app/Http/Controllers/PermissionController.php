<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function revokeReservation(User $user)
    {
        $user->revokePermissionTo('make reservation');
        return redirect()->back()->with('success', 'réservation révoquée avec succès');
    }

    public function giveReservation(User $user)
    {
        $user->givePermissionTo('make reservation');
        return redirect()->back()->with('success', 'réservation ajoutée avec succès');
    }

    public function blockuser(User $user)
    {
        $user->revokePermissionTo('can login');
        return redirect()->back()->with('success', 'login révoquée avec succès');
    }

    public function deblockuser(User $user)
    {
        $user->givePermissionTo('can login');
        return redirect()->back()->with('success', 'login ajoutée avec succès');
    }

    public function removeCreateEvent(User $user)
    {
        $user->revokePermissionTo('create event');
        return redirect()->back()->with('success', 'permission crée  événement révoquée avec succès');
    }

    public function giveCreateEvent(User $user)
    {
        $user->givePermissionTo('create event');
        return redirect()->back()->with('success', 'permission crée  événement ajoutée avec succès');
    }
}
