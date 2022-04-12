<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskLogger extends Model
{
    use HasFactory;

    protected $fillable = ["user_id","task_id","mark_finish","mark_quit","deleted_at","created_at","updated_at",];
}
