<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticalStore extends FormRequest
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
            'title' => 'required',
            'title_en' => 'required',
            'description' => 'required',
            'description_en' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => trans('validation.required'),
            'title_en.required' => trans('validation.required'),
            'description.required' => trans('validation.required'),
            'description_en.required' => trans('validation.required'),

        ];
    }
}
