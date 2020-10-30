<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    public function store($id) {
        $match = Match::create([
            'user_id' => $id,
            'company' => Auth::id()
        ]);

        return redirect()->back();
    }

    public function index() {
        if(user_id === 0)
        $match = Match::where('user_id', Auth::id())->get();
        else
        $match = Match::where('company', Auth::id())->get();

        
     return view(match.index);
        


    }
}
