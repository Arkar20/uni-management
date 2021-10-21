<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'name' => 'required|min:4|max:100',
            'email' => 'required|email|max:255',
            'password' => 'confirmed',
            // 'address' => 'required|min:4|max:255',
            'dob'=>'required',
            'nrc'=>"required|min:4|max:255",
        ];
    }
}
