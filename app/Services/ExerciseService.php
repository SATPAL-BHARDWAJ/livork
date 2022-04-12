<?php

namespace App\Services;

trait ExerciseService {

    private function prepareBeforeSave(array $data) : Array
    {
        $result = [];

        foreach($data['exercise_type'] as $i => $type)
        {
            array_push($result, [
                "type" => $type,
                "duration" => $data['duration'][$i],
                "user_id" => auth()->user()->id
            ]);
        }
        return $result;
    }
}
