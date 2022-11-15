<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function addPicture(Request $request, $id){
        $user = new User;
        if($request->file('picture')){
            //dd($request->file('picture'));
            $user = User::find($id);
            $user->addMedia($request->file('picture'))
                ->toMediaCollection('user_file');
        }
        return response()->json($user);
    }
}
