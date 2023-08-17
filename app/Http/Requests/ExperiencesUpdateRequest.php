<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperiencesUpdateRequest extends FormRequest
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
            "image"       => ["image", "max:5000"],
            "title"       => ["required", "max:200"],
            "description" => ["required", "max:1000"],
            "phone"       => ["nullable","max:100"],
            "email"       => ["nullable","email", "max:100"]
        ];
    }

    public function messages(): array
    {
        return [
            "image.image"          => "Seçilen Dosya Resim Formatında Olmalıdır",
            "image.max"            => "Seçilen Dosya En Fazla 5 MB Olabilir",
            "title.required"       => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"            => "Başlık Alanı Doldurulması Zorunludur",
            "description.required" => "Açıklama Alanı Doldurulması Zorunludur",
            "description.max"      => "Açıklama Alanı En Fazla 1000 Karakterden Oluşabilir",
            "phone.max"            => "Telefon En Fazla 100 Karakterden Oluşabilir",
            "email.email"          => "Email Alanı Email Formatında Olmalıdır",
            "email.max"            => "Email Alanı En Fazla 100 Karakterden Oluşabilir"
        ];
    }
}
