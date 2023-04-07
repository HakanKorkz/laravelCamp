<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
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
            "email"=>["email","required","exists:users"],
            "password"=>["required"],
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        toast("Giriş Başarısız", "error")->position('top')->timerProgressBar()->autoClose(2000);

        return [
            "email.exists"=>"Bilgi bulunamadı",
            "email.email"=>"Geçerli bir e-posta gir",
            "email.required"=>"e-posta zorunlu",
            "password.required"=>"Şifre zorunlu"
        ];
    }
}
