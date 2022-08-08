<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;


class ProgramController extends Controller
{
    //program crud

    public function index()
    {
        $program = Program::find(1);
        $events = $program->events;
        return $events;
    }
}
