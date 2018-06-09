<?php

namespace App\Http\Requests\Web\Entity\User;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'surname2' => 'nullable',
            'email' => 'required|email',
            'terms' => 'required',
            'postal_code' => 'required|regex:/\b\d{5}\b/',
            'phone_number' => 'nullable|regex:/\b\d{9}\b/',
        ];

        return $rules;
    }
}
