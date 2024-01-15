<?php

namespace App\Http\Requests;

class MaterialRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'material_ru' => 'bail|required|max:255',
            'material_en' => 'bail|required|max:255',
            'img' => 'bail|required',
        ];
    }
}
