<?php

namespace App\Http\Requests;

class NewRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'name_uz' => 'bail|required|max:255',
            'info_uz' => 'bail|required',
            'name_ru' => 'bail|required|max:255',
            'info_ru' => 'bail|required',
            'image' => 'bail|required|max:255',
        ];
    }
}
