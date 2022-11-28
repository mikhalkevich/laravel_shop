<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;

class MaintextController extends Controller
{
    //all
    public function getUrl($url)
    {
        $maintext = Maintext::where('url', $url)->first();
        return view('static', compact('maintext'));
    }

    //for admin
    public function getAll()
    {
        $maintexts = Maintext::all();
        return view('adminka.maintext', compact('maintexts'));
    }

    public function getEdit(Maintext $maintext){
        return view('adminka.maintext_edit', compact('maintext'));
    }

    public function postUpdate(Request $request, Maintext $maintext){

        $maintext->name = $request->name;
        $maintext->body = $request->body;
        $maintext->save();
        return redirect()->back();
    }

}
