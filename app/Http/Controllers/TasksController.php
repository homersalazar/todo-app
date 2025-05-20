<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function upcoming()
    {
        return view('tasks.upcoming');
    }
}
