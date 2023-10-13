<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'course' => 'required',
            'email' => 'required|email|unique:students,email,'.$this->student
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['email'] = 'required|email|unique:students,email,'.$this->student->id;
        }

        return $rules;
    }

}
