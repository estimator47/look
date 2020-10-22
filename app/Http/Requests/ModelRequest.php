<?php

namespace App\Http\Requests;

class ModelRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'compound_uz' => 'bail|required',
            'color_uz' => 'bail|required',
            'info_uz'  => 'bail|required',
            'compound_ru' => 'bail|required',
            'color_ru' => 'bail|required',
            'info_ru'  => 'bail|required',
            'article'  => 'bail|required',
            'size'     => 'bail|required',
        ];
    }
}
