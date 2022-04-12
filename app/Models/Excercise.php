<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excercise extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'type', 'duration', 'calories', 'deleted_at', 'created_at', 'updated_at'];
}
