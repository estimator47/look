<?php

namespace App\Http\Requests;

class CatalogRequest extends Request
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
            'name_ru' => 'bail|required|max:255',
        ];
    }
}
