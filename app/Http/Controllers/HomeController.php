<?php

namespace App\Http\Controllers;

use App\Models\Excercise;
use App\Models\Meal;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

    }

    public function reportsTab() {
        $user_id = auth()->user()->id;
        $total_tasks = Task::where("user_id", $user_id)->count();
        $calories_intake = Meal::where("user_id", $user_id)->sum("calories");
        $calories_consumed = Excercise::where("user_id", $user_id)->sum("calories");

        return view('reports', ["total_tasks" => $total_tasks, "calories_consumed" => $calories_consumed, "calories_intake" => $calories_intake]);
    }
}
