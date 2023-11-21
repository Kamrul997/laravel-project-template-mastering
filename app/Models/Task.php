<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tasks';

    // public function subtasks() {
    //     return $this->hasMany(SubTask::class, 'sub_task_parent_id');
    // }

    public function subtasks()
    {
        return $this->hasMany(SubTask::class, 'sub_task_parent_id');
    }

}
