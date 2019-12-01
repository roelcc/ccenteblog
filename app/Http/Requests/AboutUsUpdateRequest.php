<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsUpdateRequest extends FormRequest
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
        $rules = [
            'title'          => 'required',
            'slug'          => 'required|unique:aboutUS,slug,' . $this->aboutUs,
            'user_id'       => 'required|integer',
//            'short_name'   => 'required',

            'question_1'          => 'required',
            'status'        => 'required|in:DRAFT,PUBLISHED',
        ];

        if($this->get('image'))
            $rules = array_merge($rules, ['image'         => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
