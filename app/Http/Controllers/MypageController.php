<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class MypageController extends Controller
{
    public function index() {
        $exist = Profile::where('user_id', Auth::id())->exists();

// dd(Auth::user());
        $user = Auth::user();
        return view('mypage.index',compact('user','exist')); 
    }



    public function create() {
        // dd($exist);
        return view('mypage.create');
     }
     

     public function store(Request $request)
    {
       Profile::create([
           'user_id' => Auth::id(),
            'employment' => $request->employment,
            'language' => $request->language,
            'location' => $request->location,
            'birthday' => $request->birthday,
            'icon' => $request->icon,
            'image' => $request->image,
            'appeal' => $request->appeal,
            'future' => $request->future,
           
           
        ]);
        $user = Auth::user();
        return redirect()->route('mypage.index',$user);
       
    }


     public function edit() {
         //dd(Auth::id());
        $profile = User::where('id', Auth::id())->profile->get();
        return view('mypage.edit',compact('profile'));
     }
     

     public function update(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile->update([
            'employment' => $request->employment,
            'language' => $request->language,
            'location' => $request->createlocation,
            'barthday' => $request->barthday,
            'icon' => $request->icon,
            'image' => $request->image,
            'appeal' => $request->appeal,
            'future' => $request->future,
           
           
        ]);

        return redirect()->route('mypage.index',$user);

    }


    
}
