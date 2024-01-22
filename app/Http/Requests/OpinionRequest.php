<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpinionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:70',
            'email' => 'required|email|min:4|max:70',
            'phone' => 'required|min:6|max:40',
            'text' => 'required|min:3',
            'product'=> 'min:3'
        ];
    }
}
