<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //Event crud
    public function index()
    {
        $events = Event::all()->toArray();
        foreach ($events as $key => $value) {
            $path = base_path() . '/storage/app/' . $value["image"];
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            $events[$key]['image'] = $base64;
        }
        return array_reverse($events);
    }


    public function store(Request $request)
    {
        $image = $this->UploadImage($request);
        $event = new Event([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $image,
            'program_id' => $request->input('program_id'),

        ]);
        $event->save();
        return response()->json('Event created!');
    }

    public function show($id)
    {
        $event = Event::find($id);
        $path = base_path() . '/storage/app/' . $event["image"];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $event['image'] = $base64;
        return response()->json($event);
    }

    public function update($id, Request $request)
    {
        $image = $this->UploadImage($request);
        $event = Event::find($id);
        $all_fields = $request->all();
        $all_fields["image"] = $image;
        Storage::delete($event->image);
        $event->update($all_fields);
        return response()->json('Event updated');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        Storage::delete($event->image);
        $event->delete();

        return response()->json('Event deleted');
    }

    public function UploadImage(Request $request)
    {
        if ($request->input('image')) {
            //handle jpeg, jpg, svg, png image types here 
            //this check assumes your client sends the image with the key image } else { 
            //handle base64 encoded images here 
            $name = Str::random(15) . '.png';
            // decode the base64 file 
            $file = base64_decode(preg_replace(
                '#^data:image/\w+;base64,#i',
                '',
                $request->input('image')
            ));

            Storage::put($name, $file);
            //return a response as json assuming you are building a restful API return response()->json([ 'message'=>'File uploaded', 'data'=> ['file'=>$response] ]); 
            return $name;
        }
    }
}
