<?php

namespace App\Http\Requests;

class PriceRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'name' => 'bail|required|max:255',
            'address'=> 'bail|required',
            'phone' => 'bail|required|numeric',
            'email' => 'bail|email|required',
        ];
    }
}
