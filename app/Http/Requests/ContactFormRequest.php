<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            "name"    => ["required", "max:200"],
            "subject" => ["required", "max:200"],
            "email"   => ["required", "email"],
            "message" => ["required", "max:2000"]
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"    => "Adınızı Alanı Boş Geçilemez",
            "name.max"         => "Adınız En Fazla 200 Karakterden Oluşabilir",
            "subject.required" => "Konu Alanı Boş Geçilemez",
            "subject.max"      => "Konu En Fazla 200 Karakterden Oluşabilir",
            "email.required"   => "Email Alanı Boş Geçilemez",
            "email.email"      => "Lütfen Gerçek Bir Email Adresi Giriniz",
            "message.required" => "Mesaj Alanı Boş Geçilemez",
            "message.max"      => "Mesaj En Fazla 200 Karakterden Oluşabilir"
        ];
    }
}
