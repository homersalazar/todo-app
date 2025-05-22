<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function upcoming()
    {
        return view('tasks.upcoming');
    }

    public function today()
    {
        return view('tasks.today');
    }

    public function calendar()
    {
        return view('tasks.calendar');
    }

    public function sticky_wall()
    {
        return view('tasks.sticky_wall');
    }
}
