<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function show($id) {
        $user = User::find($id);
        $profile = $user->profile;
        
        return view('profile.show', compact('profile', 'user'));
    }
}
