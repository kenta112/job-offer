<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index() {

// dd(Auth::user());

$user = Auth::user();


        return view('mypage.index',compact('user'));
        
    }


}
