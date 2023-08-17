<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillSectionUpdateRequest extends FormRequest
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
            "title"     => ["required", "max:200"],
            "sub_title" => ["required", "max:1000"],
            "image"     => ["image", "max:5000"]
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"     => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"          => "Başlık Alanı En Fazla 200 Karakterden Oluşabilir",
            "sub_title.required" => "Alt Başlık Alanı Doldurulması Zorunludur",
            "sub_title.max"      => "Alt Başlık Alanı En Fazla 1000 Karakterden Oluşabilir",
            "image.image"        => "Seçilen Dosya Resim Formatında Olmalıdır",
            "image.max"          => "Seçilen Resim En Fazla 5 MB Olmalıdır"
        ];
    }
}
