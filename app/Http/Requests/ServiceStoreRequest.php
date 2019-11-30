<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'          => 'required',
            'slug'          => 'required|unique:services,slug',
            'user_id'       => 'required|integer',
            'status'        => 'required|in:DRAFT,PUBLISHED',
        ];

        if($this->get('image'))
            $rules = array_merge($rules, ['image'         => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
