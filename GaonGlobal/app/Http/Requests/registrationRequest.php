<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|min:3|max:16',
            'email'=>'required|string|email|min:5|unique:users,email',
            'password'=>'required|string|confirmed|min:8|max:16|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).+$/',
            'g-recaptcha-response'=>'required|recaptcha',
        ];


    }

    public function messages()
{
    return [
        'password.regex' => 'The password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
        'g-recaptcha-response.required' => 'Please complete the captcha verification.',
    ];
}

}
