<?php

namespace App\Services;

trait MealService {

    private function prepareBeforeSave(array $data) : Array
    {
        $result = [];

        foreach($data['name'] as $i => $name)
        {
            array_push($result, [
                "name" => $name,
                "description" => $data['description'][$i],
                "user_id" => auth()->user()->id
            ]);
        }

        return $result;
    }
}
