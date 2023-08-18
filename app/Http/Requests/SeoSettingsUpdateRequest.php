<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeoSettingsUpdateRequest extends FormRequest
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
            "title"       => ["required", "max:200"],
            "description" => ["required", "max:500"],
            "keywords"    => ["required", "max:300"]
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"       => "Başlık Alanı Boş Geçilemez",
            "title.max"            => "Başlık Alanı En Fazla 200 Karakterden Oluşabilir",
            "description.required" => "SEO Açıklama Alanı Boş Geçilemez",
            "description.max"      => "SEO Açıklama Alanı En Fazla 500 Karakterden Oluşabilir",
            "keywords.required"    => "SEO Anahtar Kelimeler Alanı Boş Geçilemez",
            "keywords.max"         => "SEO Anahtar Kelimeler Alanı En Fazla 300 Karakterden Oluşabilir",
        ];
    }
}
