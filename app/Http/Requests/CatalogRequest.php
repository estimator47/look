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
            'material_id' => 'bail|required',
            'type_id' => 'bail|required',
            'title_en' => 'bail|required',
            'color_en' => 'bail|required',
            'info_en' => 'bail|required',
            'description_en' => 'bail|required',
            'title_ru' => 'bail|required',
            'color_ru' => 'bail|required',
            'info_ru' => 'bail|required',
            'description_ru' => 'bail|required',
            'size' => 'bail|required',
            'image' => 'bail|required',
            'color_img' => 'bail|required'

        ];
    }
}
