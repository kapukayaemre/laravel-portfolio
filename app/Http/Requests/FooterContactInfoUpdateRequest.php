<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterContactInfoUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "address" => ["max:500"],
            "phone"   => ["max:50"],
            "email"   => ["email", "max:200"]
        ];
    }

    public function messages(): array
    {
        return [
            "address.max" => "Adres En Fazla 500 Karakterden Oluşabilir",
            "phone.max"   => "Telefon En Fazla 50 Karakterden Oluşabilir",
            "email.email" => "Email formatında Bir Mail Giriniz",
            "email.max"   => "Email En Fazla 200 Karakterden Oluşabilir"
        ];
    }
}
