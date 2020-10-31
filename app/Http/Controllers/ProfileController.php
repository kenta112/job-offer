<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Match;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    const PAGINATION_LIMIT = 9;

    public function index() {
        $profiles = Profile::orderBy('created_at','desc')->paginate(self::PAGINATION_LIMIT);
        
        return view('profile.index',[
            'profiles' => $profiles,
        ]);
    }

    public function show($id) {

        $user = User::where('id',$id)->first();
        
        $profile = $user->profile;

        $user_type = Auth::user()->type;

        $matched = Match::where('user_id', $user->id)->where('company', Auth::id())->exists();

        return view('profile.show', compact('profile', 'user', 'matched', 'user_type'));
    }
}
