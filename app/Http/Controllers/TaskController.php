<?php

namespace App\Http\Controllers;


use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\SubTask;
use Illuminate\Support\Facades\Auth;
use Illuminate\database\Eloquent\Collection;

class TaskController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        if (Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin') {
            $allTaskAndSubtask = Task::with('subtasks')->paginate(10);
            // dd(->sub_task_title);
            return view('tasks.index', compact('allTaskAndSubtask'));
        } else {
            $allTaskAndSubtask = Task::where('assign_to', $name)->paginate(10);
            return view('tasks.index', compact('allTaskAndSubtask'));
        }
    }

    public function create()
    {
        if (Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin') {

            $users = User::all();
            return view('tasks.create', compact('users'));
        } else {
            return ('you dont have permission.');
        }
    }

    public function store(TaskRequest $request)
    {

        if (Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin') {

            $task = new Task();

            $task->name = $request->taskName;
            $task->details = $request->taskDetails;
            $task->assign_to = $request->taskAssignTo;
            $task->assign_date = $request->assignDate;
            $task->status = $request->status;

            $task->save();

            if ($request->subTaskName !== null && $request->subTaskDetails !== null) {
                $subTask =  new SubTask();

                $subTask->sub_task_title = $request->subTaskName;
                $subTask->sub_task_details = $request->subTaskDetails;
                $subTask->sub_task_parent_id = $task->id;

                $subTask->save();
            }


            return redirect(route('task.index'));
        } else {
            return ('you dont have permission.');
        }
    }

    public function edit(Task $taskId)
    {

        $users = User::all();
        $subTasks = SubTask::where('sub_task_parent_id', $taskId->id)->get();
        $data = [
            'users' => $users,
            'subTasks' => $subTasks,
        ];

        return view('tasks.edit', ['task' => $taskId], compact('data'));
    }

    public function update(TaskRequest $request)
    {

        $task = Task::find($request->taskId);
        if (Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin') {

            $task->name = $request->taskName;
            $task->details = $request->taskDetails;
            $task->assign_to = $request->taskAssignTo;
            $task->assign_date = $request->assignDate;
            $task->status = $request->status;

            $task->save();
            $subTask = SubTask::where('sub_task_parent_id', $request->taskId)->get();

            if ($request->subTaskName !== null && $request->subTaskDetails !== null)
            {
                if ($subTask->isNotEmpty()) {
                    $subTask = SubTask::where('sub_task_parent_id', $request->taskId)->first();

                    $subTask->sub_task_title = $request->subTaskName;
                    $subTask->sub_task_details = $request->subTaskDetails;
                    $subTask->sub_task_parent_id = $task->id;

                    $subTask->save();
                }
                else
                {
                    $subTask = new SubTask();

                    $subTask->sub_task_title = $request->subTaskName;
                    $subTask->sub_task_details = $request->subTaskDetails;
                    $subTask->sub_task_parent_id = $task->id;

                    $subTask->save();
                }

            }

            return redirect(route('task.index'));
        } else {
            $task->status = $request->status;
            $task->save();
            return redirect(route('task.index'));
        }
    }

    public function delete(Task $taskId)
    {

        if (Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin') {

            $this->deleteSubtask($taskId->id);
            $taskId->delete();
            return redirect(route('task.index'));
        } else {
            return ('you dont have permission.');
        }
    }

    public function deleteSubtask($id)
    {
        SubTask::where('sub_task_parent_id', $id)->delete();
    }
}
