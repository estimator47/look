<?php

namespace App\Http\Requests;

class RubricRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'title_uz' => 'bail|required|max:255',
            'info_uz' => 'bail|required',
            'title_ru' => 'bail|required|max:255',
            'info_ru' => 'bail|required',
            'source' => 'bail|required|max:255',
            'image' => 'bail|required|max:255',
        ];
    }
}
