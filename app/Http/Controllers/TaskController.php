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

        $task = new Task();

        $task->name = $request->taskName;
        $task->details = $request->taskDetails;
        $task->assign_to = $request->taskAssignTo;
        $task->assign_date = $request->assignDate;
        $task->status = $request->status;

        $task->save();

        return redirect(route('task.index'));
    }

    public function edit(Task $taskId){
        $users = User::all();
        return view('tasks.edit', ['task' => $taskId], compact('users'));
    }

    public function update(TaskRequest $request){


        $task = Task::find($request->taskId);

        $task->name = $request->taskName;
        $task->details = $request->taskDetails;
        $task->assign_to = $request->taskAssignTo;
        $task->assign_date = $request->assignDate;
        $task->status = $request->status;

        // dd($task);
        $task->save();
        return redirect(route('task.index'));
    }

    public function delete(Task $taskId){
        $taskId->delete();
        return redirect(route('task.index'));
    }
}
