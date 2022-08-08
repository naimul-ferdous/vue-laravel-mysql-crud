<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;


class ProgramController extends Controller
{
    //Program crud
    public function index()
    {
        $programs = Program::all()->toArray();
        return array_reverse($programs);
    }


    public function store(Request $request)
    {
        $program = new Program([

            'title' => $request->input('title'),
            'channel' => $request->input('channel'),
            'duration' => $request->input('duration'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
        ]);
        $program->save();
        return response()->json('Program created!');
    }

    public function show($id)
    {
        $program = Program::find($id);
        return response()->json($program);
    }

    public function update($id, Request $request)
    {
        $program = Program::find($id);
        $program->update($request->all());
        return response()->json('Program updated');
    }

    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();

        return response()->json('Program deleted');
    }
}
