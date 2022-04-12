<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class StorePlayQuizeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "ques" => "required",
            "ans" => "required"
        ];
    }

    /**
     * Get the data from the request
     *
     * @return array
     */
    public function validationData()
    {
        $data = [];
        $all = $this->all();
        if (Arr::has($all, "ans")) {
            $data = array_merge(Arr::except($all, "ans"), ["ans" => array_filter($all['ans'])]);
        }
        return $data;
    }
}
