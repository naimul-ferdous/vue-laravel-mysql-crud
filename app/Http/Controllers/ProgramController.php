<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Program;


class ProgramController extends Controller
{
    //Program crud
    public function index()
    {
        $programs = Program::all()->toArray();

        foreach ($programs as $key => $value) {

            $path = base_path() . '/storage/app/' . $value["banner_image"];
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            $programs[$key]['banner_image'] = $base64;

            //for about image
            $about_image_path = base_path() . '/storage/app/' . $value["about_image"];
            $about_image_type = pathinfo($about_image_path, PATHINFO_EXTENSION);
            $about_image_data = file_get_contents($about_image_path);
            $about_image_base64 = 'data:image/' . $about_image_type . ';base64,' . base64_encode($about_image_data);
            $programs[$key]['about_image'] = $about_image_base64;
        }

        return array_reverse($programs);
    }


    public function store(Request $request)
    {

        $image = $this->UploadImage($request);
        $image = $this->UploadImage($request);


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

    public function UploadImage(Request $request)
    {
        if ($request->input('banner_image')) {
            $name = Str::random(15) . '.png';
            $file = base64_decode(preg_replace(
                '#^data:image/\w+;base64,#i',
                '',
                $request->input('banner_image')
            ));
            Storage::put($name, $file);
            return $name;
        } else if ($request->input('about_image')) {

            $about_image_name = Str::random(15) . '.png';
            $about_image_file = base64_decode(preg_replace(
                '#^data:image/\w+;base64,#i',
                '',
                $request->input('about_image')
            ));
            Storage::put($about_image_name, $about_image_file);
            return $about_image_name;
        }
    }
}
