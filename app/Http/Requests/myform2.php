<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myform2 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>"required",
            "quantity"=>"required",
            "description"=>"required"
        ];
    }

    public function messages()
    {
        return[
        "name.required"=>"name should be filled",
        "quantity.required"=>"quantity should be filled",
        "description.min"=>"length should be more than 8"
    ];
    } 
}
