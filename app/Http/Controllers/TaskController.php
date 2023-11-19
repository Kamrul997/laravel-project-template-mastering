<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){
            $tasks = Task::all();
            return view('tasks.index', compact('tasks'));

        }else{
            $tasks = Task::where('assign_to', $name)->get();
            return view('tasks.index', compact('tasks'));
        }

    }

    public function create(){
        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $users = User::all();
            return view('tasks.create', compact('users'));

        }else{
            return ('you dont have permission.');
        }

    }

    public function store(TaskRequest $request){

        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $task = new Task();

            $task->name = $request->taskName;
            $task->details = $request->taskDetails;
            $task->assign_to = $request->taskAssignTo;
            $task->assign_date = $request->assignDate;
            $task->status = $request->status;

            $task->save();

            return redirect(route('task.index'));

        }else{
            return ('you dont have permission.');
        }

    }

    public function edit(Task $taskId){

        $users = User::all();
        return view('tasks.edit', ['task' => $taskId], compact('users'));
    }

    public function update(TaskRequest $request){

        $task = Task::find($request->taskId);
        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $task->name = $request->taskName;
            $task->details = $request->taskDetails;
            $task->assign_to = $request->taskAssignTo;
            $task->assign_date = $request->assignDate;
            $task->status = $request->status;

            // dd($task);
            $task->save();
            return redirect(route('task.index'));

        }else{
            $task->status = $request->status;
            $task->save();
            return redirect(route('task.index'));
        }



    }

    public function delete(Task $taskId){

        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $taskId->delete();
            return redirect(route('task.index'));

        }else{
            return ('you dont have permission.');
        }
    }
}
