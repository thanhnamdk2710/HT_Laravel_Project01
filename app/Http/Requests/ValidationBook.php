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
        return [
            'isbn' => 'required|string',
            'name' => 'required|string',
            // 'fImages' => 'required',
            'category'=>'required|string',
            'editor'=> 'required',
            'publisher' => 'required',
        ];
    }
}
