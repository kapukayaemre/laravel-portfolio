<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackStoreRequest extends FormRequest
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
            "title"       => ["required", "max:100"],
            "position"    => ["required", "max:200"],
            "description" => ["required", "max:1000"]
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"       => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"            => "Başlık Alanı En Fazla 100 Karakterden Oluşabilir",
            "position.required"    => "Pozisyon Alanı Doldurulması Zorunludur",
            "position.max"         => "Pozisyon Alanı En Fazla 200 Karakterden Oluşabilir",
            "description.required" => "Açıklama Alanı Doldurulması Zorunludur",
            "description.max"      => "Açıklama Alanı En Fazla 1000 Karakterden Oluşabilir"
        ];
    }
}
