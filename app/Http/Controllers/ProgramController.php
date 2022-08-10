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
        $bannerInput = $request->input('banner_image');
        $aboutInput = $request->input('about_image');

        $bannerImage = $this->UploadImage($bannerInput);
        $aboutImage = $this->UploadImage($aboutInput);

        $program = new Program([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
            'banner_image' => $bannerImage,
            'about_image' => $aboutImage,
        ]);
        $program->save();
        return response()->json('Program created!');
    }

    public function show($id)
    {
        $program = Program::find($id);

        $path = base_path() . '/storage/app/' . $program["banner_image"];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $program['banner_image'] = $base64;

        //for about image
        $about_image_path = base_path() . '/storage/app/' . $program["about_image"];
        $about_image_type = pathinfo($about_image_path, PATHINFO_EXTENSION);
        $about_image_data = file_get_contents($about_image_path);
        $about_image_base64 = 'data:image/' . $about_image_type . ';base64,' . base64_encode($about_image_data);
        $program['about_image'] = $about_image_base64;

        return response()->json($program);
    }

    public function update($id, Request $request)
    {
        $bannerImage = $this->UploadImage($request->input('banner_image'));
        $aboutImage = $this->UploadImage($request->input('about_image'));
        $program = Program::find($id);
        $all_fields = $request->all();
        $all_fields["banner_image"] = $bannerImage;
        $all_fields["about_image"] = $aboutImage;
        Storage::delete($program->banner_image);
        Storage::delete($program->about_image);
        $program->update($all_fields);
        return response()->json('Program updated');
    }

    public function destroy($id)
    {
        $program = Program::find($id);
        Storage::delete($program->banner_image);
        Storage::delete($program->about_image);
        $program->delete();
        return response()->json('Program deleted');
    }

    public function UploadImage($imgInput)
    {
        if ($imgInput) {
            $name = Str::random(15) . '.png';
            $file = base64_decode(preg_replace(
                '#^data:image/\w+;base64,#i',
                '',
                $imgInput
            ));
            Storage::put($name, $file);
            return $name;
        }
    }
}
