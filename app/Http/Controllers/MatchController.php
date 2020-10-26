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
}
