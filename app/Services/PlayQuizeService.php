<?php

namespace App\Services;

use App\Models\Quize;

trait PlayQuizeService {
    private function getQuizeResources(array $select = ['id', 'question']) : Array
    {
        $quizes = Quize::select(...$select)/* ->whereNotNull('expected_ans') */->get();
        if ($quizes->isNotEmpty()) {
            $quizes = $quizes->toArray();
        } else {
            $quizes = [];
        }
        return $quizes;
    }

    private function prepareBeforeSave(array $data) : Array
    {
        $result = [];
        foreach($data['ques'] as $i => $q_id) {
            array_push($result, [
                'quize_id' => $q_id,
                'ans' => $data['ans'][$i] ?? "No ans found!",
                'user_id' => auth()->user()->id
            ]);
        }

        return $result;
    }
}
