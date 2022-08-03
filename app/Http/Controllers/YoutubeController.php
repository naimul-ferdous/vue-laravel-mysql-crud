<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;


class YoutubeController extends Controller
{
    //Youtube crud
    public function index()
    {
        $youtubes = Youtube::all()->toArray();
        return array_reverse($youtubes);
    }


    public function store(Request $request)
    {
        $youtube = new Youtube([

            'title' => $request->input('title'),
            'channel' => $request->input('channel'),
            'duration' => $request->input('duration'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
        ]);
        $youtube->save();
        return response()->json('Youtube created!');
    }

    public function show($id)
    {
        $youtube = Youtube::find($id);
        return response()->json($youtube);
    }

    public function update($id, Request $request)
    {
        $youtube = Youtube::find($id);
        $youtube->update($request->all());
        return response()->json('Youtube updated');
    }

    public function destroy($id)
    {
        $youtube = Youtube::find($id);
        $youtube->delete();

        return response()->json('Youtube deleted');
    }
}
