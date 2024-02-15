<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSingleServiceRequest extends FormRequest
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
            'name' => 'required|unique:services,name,'.$this->id,
            'name_en' => 'required|unique:services,name_en,'.$this->id,
            'price' => 'numeric|required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('validation.required'),
            'name.unique' => trans('validation.unique'),
            'name_en.required' => trans('validation.required'),
            'name_en.unique' => trans('validation.unique'),
            'price.required' => trans('validation.required'),
            'price.numeric' => trans('validation.numeric'),
        ];
    }
}
