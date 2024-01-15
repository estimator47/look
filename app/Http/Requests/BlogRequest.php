<?php

namespace App\Http\Requests;

class BlogRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'title_en' => 'bail|required',
            'text_en' => 'bail|required',
            'title_ru' => 'bail|required',
            'text_ru' => 'bail|required',
            'image' => 'bail|required|max:255',
            'video' => 'bail|required',
        ];
    }
}
