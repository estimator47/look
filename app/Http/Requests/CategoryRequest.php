<?php

namespace App\Http\Requests;

class CategoryRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'category_uz' => 'bail|required|max:255',
            'category_ru' => 'bail|required|max:255',
        ];
    }
}
