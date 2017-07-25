<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
    	$task = Task::all();

    return view('tasks.index', compact('task'));
    }

    public function show(Task $task)
    {
    	
	
    return view('tasks.show', compact('task'));
    }
}

