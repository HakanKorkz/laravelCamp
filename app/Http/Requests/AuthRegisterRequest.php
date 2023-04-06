<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            #'name.required' => 'İsim alanı gereklidir.',
            'email.required' => 'E-posta alanı gereklidir.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi daha önce kullanılmıştır.',
            'password.required' => 'Şifre alanı gereklidir.',
            'password.min' => 'Şifre en az :min karakter uzunluğunda olmalıdır.',
            #'password.confirmed' => 'Şifre doğrulama uyuşmuyor.',
        ];
    }
}
