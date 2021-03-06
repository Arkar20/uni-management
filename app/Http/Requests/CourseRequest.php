<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'desc' => 'required|min:4|max:255',
            'teacher_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'price'=>'required|min:1|max:10',
            'major'=>'required|min:1|max:255',
          

        ];
    }
}
