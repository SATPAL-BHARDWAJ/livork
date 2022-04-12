<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "task_label_id",	"title", "description", "deleted_at", 	"created_at", "updated_at"];

    public function mark() {
        $this->logger()->create(["mark_finish" => 1, "user_id" => auth()->user()->id]);
    }

    public function logger() {
        return $this->hasOne(TaskLogger::class);
    }
}
