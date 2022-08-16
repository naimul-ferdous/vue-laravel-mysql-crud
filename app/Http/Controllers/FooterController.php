<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    //Footer  
    public function index()
    {
        $Footers = Footer::all()->toArray();
        return array_reverse($Footers);
    }



    public function store(Request $request)
    {
        $footer = new Footer([
            'title' => $request->input('title'),
            'address' => $request->input('address'),
            'copyiright' => $request->input('copyright'),
        ]);
        $footer->save();
        return response()->json('Footer created!');
    }


    public function show($id)
    {
        $footer  = Footer ::find($id);
        return response()->json($footer );
    }

    public function update($id, Request $request)
    {
        $footer  = Footer ::find($id);
        $all_fields = $request->all();
        $footer ->update($all_fields);
        return response()->json('Footer  updated');
    }
    public function destroy($id)
    {
        $footer  = Footer::find($id);
        
        $footer ->delete();

        return response()->json('Footer  deleted');
    }
}
