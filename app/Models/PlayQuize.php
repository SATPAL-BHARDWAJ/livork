<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayQuize extends Model
{
    use HasFactory;

    protected $fillable = [ 'id', 'user_id', 'quize_id', 'ans', 'rating', 'feedback' ];
}
