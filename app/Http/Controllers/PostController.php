<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //Post crud
    public function index()
    {
        $posts = Post::all()->toArray();
        return array_reverse($posts);
    }


    public function store(Request $request)
    {
        $image = $this->UploadImage($request);
        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'excerpt' => $request->input('excerpt'),
            'image' => $image,
            'author' => $request->input('author'),
            'status' => $request->input('status'),
        ]);
        $post->save();
        return response()->json('Post created!');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('Post updated');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json('Post deleted');
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
