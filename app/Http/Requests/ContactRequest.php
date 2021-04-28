<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:32', 'regex:/^[\pL\s]+$/u'],
            'email' => ['required', 'email', 'email:rfc,dns', 'max:32'],
            'message' => ['required', 'min:20', 'max:1000']
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.regex' => 'The name may only contain letters and spaces.',
        ];
    }


}
