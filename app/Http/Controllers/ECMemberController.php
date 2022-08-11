<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ECMember;

class ECMemberController extends Controller
{
    //EcMember Grud 
    public function index()
    {
        $EcMembers = EcMember::all()->toArray();
        foreach ($EcMembers as $key => $value) { 
            $path = base_path() . '/storage/app/' . $value["img"];
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            $EcMembers[$key]['img'] = $base64;
        }
        return array_reverse($EcMembers);
    }


    public function store(Request $request)
    {
        $img = $this->UploadImg($request);
        echo $img;
        $Ecmember = new Ecmember([
            'title' => $request->input('title'),
            'img' => $img,
            'description' => $request->input('description'),
            'section' => $request->input('section'),
        ]);
        $Ecmember->save();
        return response()->json('Ecmember created!');
    }
    public function show($id)
    {
        $Ecmember  = Ecmember ::find($id);
        // $path = Storage::url($value["img"]);
        $path = base_path() . '/storage/app/' . $Ecmember ["img"];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $Ecmember ['img'] = $base64;
        return response()->json($Ecmember );
    }
    public function update($id, Request $request)
    {
        $img = $this->UploadImg($request);
        $Ecmember  = Ecmember ::find($id);
        $all_fields = $request->all();
        $all_fields["img"] = $img;
        Storage::delete($Ecmember ->img);
        $Ecmember ->update($all_fields);
        return response()->json('Ecmember  updated');
    }
    public function destroy($id)
    {
        $Ecmember  = Ecmember::find($id);
        Storage::delete($Ecmember->img);
        $Ecmember ->delete();

        return response()->json('Ecmember  deleted');
    }
    public function UploadImg(Request $request)
    {
        if ($request->input('img')) {
            //handle jpeg, jpg, svg, png img types here 
            //this check assumes your client sends the img with the key img } else { 
            //handle base64 encoded imgs here 
            $name = Str::random(15) . '.png';
            // decode the base64 file 
            $file = base64_decode(preg_replace(
                '#^data:image/\w+;base64,#i',
                '',
                $request->input('img')
            ));

            Storage::put($name, $file);
            //return a response as json assuming you are building a restful API return response()->json([ 'message'=>'File uploaded', 'data'=> ['file'=>$response] ]); 
            return $name;
        }
    }
}

