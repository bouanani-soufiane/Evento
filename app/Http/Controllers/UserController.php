<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->withTrashed()->paginate(5);

        return view("admin.users", compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'utilisatuer supprimer avec succès');

    }
    public function restoreUser($id)
    {
        $user = User::withTrashed()->find($id);
        $user->restore();
        return redirect()->back()->with('success', 'utilisateur restaurée avec succès');

    }
    public function deleteUserForever($id)
    {
        $user = User::withTrashed()->find($id);

        $user->forceDelete();
        return redirect()->back()->with('success', 'utilisateur supprimer définitivement  avec succès');

    }
}
