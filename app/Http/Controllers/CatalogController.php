<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
    //for web
    public function getIndex()
    {
        $catalogs = Catalog::all();
        return view('catalogs', compact('catalogs'));
    }
    public function getOne(Catalog $catalog){
        return view('catalog', compact('catalog'));
    }
    public function addProduct(Request $request, Catalog $catalog){
        $catalog->products()->syncWithoutDetaching($request->product_id);
        return  redirect('catalog/'.$catalog->id);
    }

    public function detachProduct(Request $request, Catalog $catalog){
        $catalog->products()->detach($request->product_id);
        return  redirect('catalog/'.$catalog->id);
    }

    //for API
    /*
     *
     */
    public function getAll()
    {
        return response()->json(Catalog::all());
    }

    public function addPicture(Request $request, $id)
    {
        $catalog = new Catalog;
        if ($request->file('picture')) {
            $catalog = Catalog::find($id);
            $catalog->addMedia($request->file('picture'))->toMediaCollection('catalog');
        }
        return response()->json($catalog);
    }
}
