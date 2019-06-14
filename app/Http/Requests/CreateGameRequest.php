<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  =>  [
                'required',
                'min:4',
                'max:40'
            ],
            'description'   =>  [
                'required',
                'min:10',
                'max:300'
            ],
            'url'   =>  [
                'required',
                'min:5',
                'max:255',
                'url'
            ],
            'category'  =>  [
                'required',
                'exists:categories,id'
            ]

        ];
    }
}
