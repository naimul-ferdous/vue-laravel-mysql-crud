<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //Teacher crud
    public function index()
    {
        $teachers = Teacher::all()->toArray();
        foreach ($teachers as $key => $value) {
            $path = base_path() . '/storage/app/' . $value["photo"];
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            $teachers[$key]['photo'] = $base64;
        }
        return array_reverse($teachers);
    }


    public function store(Request $request)
    {
        $image = $this->UploadImage($request);
        $teacher = new Teacher([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'photo' => $image,
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description'),
        ]);
        $teacher->save();
        return response()->json('Teacher created!');
    }

    public function show($id)
    {
        $teacher = Teacher::find($id);
        // $path = Storage::url($value["image"]);
        $path = base_path() . '/storage/app/' . $teacher["photo"];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $teacher['photo'] = $base64;
        return response()->json($teacher);
    }

    public function update($id, Request $request)
    {
        $image = $this->UploadImage($request);
        $teacher = Teacher::find($id);
        $all_fields = $request->all();
        $all_fields["photo"] = $image;
        Storage::delete($teacher->photo);
        $teacher->update($all_fields);
        return response()->json('Teacher updated');
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        Storage::delete($teacher->photo);
        $teacher->delete();

        return response()->json('Teacher deleted');
    }

    public function UploadImage(Request $request)
    {
        if ($request->input('photo')) {
            //handle jpeg, jpg, svg, png image types here 
            //this check assumes your client sends the image with the key image } else { 
            //handle base64 encoded images here 
            $name = Str::random(15) . '.png';
            // decode the base64 file 
            $file = base64_decode(preg_replace(
                '#^data:image/\w+;base64,#i',
                '',
                $request->input('photo')
            ));

            Storage::put($name, $file);
            //return a response as json assuming you are building a restful API return response()->json([ 'message'=>'File uploaded', 'data'=> ['file'=>$response] ]); 
            return $name;
        }
    }
}
