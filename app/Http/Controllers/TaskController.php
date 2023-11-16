<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create(){
        $users = User::all();
        return view('tasks.create', compact('users'));
    }

    public function store(TaskRequest $request){


        return redirect(route('task.index'));
    }

    public function edit(Task $taskId){
        return view('tasks.edit', ['task' => $taskId]);
    }

    public function update(){

    }
}
