<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Arr;

trait TaskService {

    private function getTaskResources() : Array
    {
        $response = Task::where("user_id", auth()->user()->id)->with("logger")->get();
        return $response->toArray();
    }

    private function prepareBeforeSave(Array $data) : Array
    {
        $result = [];
        foreach($data['title'] as $i => $task_title)
        {
            $temp = [
                "user_id" => auth()->user()->id,
                "title" => $task_title,
                "task_label_id" => $data['task_label'][$i]
            ];

            if (Arr::exists($data, 'mark_finish')) {
                $temp["marked"]  = is_bool( array_search($i, $data["mark_finish"]) ) ? false : true;
            }

            array_push($result, $temp);
        }

        return $result;
    }

}
