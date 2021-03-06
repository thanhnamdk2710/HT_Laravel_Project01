<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationBook extends FormRequest
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
        if($this->method('PUT')) {
            return [
                'isbn' => 'required|max:13',
                'name' => 'required|string',
                'publication_date' => 'required|date',
                'category'=>'required|string',
            ];
        } else {
            return [
                'isbn' => 'required|max:13',
                'name' => 'required|string',
                'fImages' => 'required',
                'publication_date' => 'required|date',
                'category'=>'required|string',
            ];
        }
    }
}
