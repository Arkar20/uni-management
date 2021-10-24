<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'assignment_subject' => 'required',
            'assignment_file'=>'required',
            'desc' => 'required',
            'due_date'=>'required'
        ];
    }
}
