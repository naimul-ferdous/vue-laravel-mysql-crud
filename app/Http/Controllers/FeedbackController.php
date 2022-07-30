<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;


class FeedbackController extends Controller
{
    //Feedback crud
    public function index()
    {
        $feedbacks = Feedback::all()->toArray();
        return array_reverse($feedbacks);
    }


    public function store(Request $request)
    {
        $feedback = new Feedback([

            'parents_first_name' => $request->input('parents_first_name'),
            'parents_last_name' => $request->input('parents_last_name'),
            'students_first_name' => $request->input('students_first_name'),
            'students_last_name' => $request->input('students_last_name'),
            'students_grade' => $request->input('students_grade'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'suggestion' => $request->input('suggestion'),
        ]);
        $feedback->save();
        return response()->json('Feedback created!');
    }

    public function show($id)
    {
        $feedback = Feedback::find($id);
        return response()->json($feedback);
    }

    public function update($id, Request $request)
    {
        $feedback = Feedback::find($id);
        $feedback->update($request->all());
        return response()->json('Feedback updated');
    }

    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();

        return response()->json('Feedback deleted');
    }
}
