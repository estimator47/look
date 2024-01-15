<?php

namespace App\Http\Requests;

class TypeRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'type_en' => 'bail|required|max:255',
            'type_ru' => 'bail|required|max:255',
        ];
    }
}
