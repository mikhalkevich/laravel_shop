<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Auth;

class HomeController extends Controller
{
    public function getIndex(){
        return view('dashboard');
    }
    public function postIndex(Request $request){
        $user = Auth::user();
        Profile::updateOrCreate(
            ['user_id' => $user->id],
            ['about' => $request->about]
        );
        if($request->hasFile('picture')){
            $user->addMedia($request->picture)->toMediaCollection();
        }

        return redirect()->back();
    }
}
