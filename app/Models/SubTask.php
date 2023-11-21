<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class SubTask extends Model
{
    use HasFactory;
    protected $table = 'sub_tasks';





    // Subtask.php model

        // public function task() {
        //     return $this->belongsTo(Task::class, 'sub_task_parent_id');
        // }

        public function task()
    {
        return $this->belongsTo(Task::class, 'sub_task_parent_id');
    }

}
