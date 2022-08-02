<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    //Student crud
    public function index()
    {
        $students = Student::all()->toArray();
        return array_reverse($students);
    }


    public function store(Request $request)
    {
        $student = new Student([

            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'middle_name' => $request->input('middle_name'),
            'enrollment_year' => $request->input('enrollment_year'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'residential_status' => $request->input('residential_status'),
            's_m_school' => $request->input('s_m_school'),
            's_m_school_year_level' => $request->input('s_m_school_year_level'),
            's_p_school' => $request->input('s_p_school'),
            'residential_address' => $request->input('residential_address'),
            'suburb' => $request->input('suburb'),
            'postcode' => $request->input('postcode'),
            'father_name' => $request->input('father_name'),
            'father_home_phone' => $request->input('father_home_phone'),
            'father_mobile_phone' => $request->input('father_mobile_phone'),
            'father_email' => $request->input('father_email'),
            'mother_name' => $request->input('mother_name'),
            'mother_home_phone' => $request->input('mother_home_phone'),
            'mother_mobile_phone' => $request->input('mother_mobile_phone'),
            'mother_email' => $request->input('mother_email'),
            'emergency_contact_name' => $request->input('emergency_contact_name'),
            'emergency_contact_relation' => $request->input('emergency_contact_relation'),
            'emergency_contact_phone' => $request->input('emergency_contact_phone'),
            'medical_conditon' => $request->input('medical_conditon'),
            'medical_condition_details' => $request->input('medical_condition_details'),
            'photo_permissoin' => $request->input('photo_permissoin'),
            'parent_agreement' => $request->input('parent_agreement'),
            'receipt' => $request->input('receipt'),
        ]);

        $student->save();
        return response()->json('Student created!');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function update($id, Request $request)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return response()->json('Student updated');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return response()->json('Student deleted');
    }
}
