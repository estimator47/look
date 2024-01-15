<?php

namespace App\Http\Requests;

class MessageRequest extends Request
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
            'email' => 'bail|email|required',
            'phone' => 'bail|required|numeric',
            'address' => 'bail|required',
            'message' => 'bail|required',
        ];
    }
}
