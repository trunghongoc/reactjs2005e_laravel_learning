<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class UserCreateRequest extends BaseRequest
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
            // 'name' => 'required|max:10',
            // 'email' => 'required|email'
            'avatar' => 'required|image|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Khong duoc de trong name',
            'name.max' => 'do dai toi da cua name la 10',
        ];
    }
}
