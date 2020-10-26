<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Match;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function show($id) {
        $user = User::find($id);
        $profile = $user->profile;

        $matched = Match::where('user_id', $user->id)->where('company', Auth::id())->exists();

        return view('profile.show', compact('profile', 'user', 'matched'));
    }
}
