<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            "description" => ["required", "max:5000"],
            "image"       => ["image"],
            "resume"      => ["mimes:pdf,csv,txt", "max:10000"]
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"       => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"            => "Başlık Alanı En Fazla 200 Karakterden Oluşabilir",
            "description.required" => "Açıklama Alanı Doldurulması Zorunludur",
            "description.max"      => "Açıklama Alanı En Fazla 5000 Karakterden Oluşabilir",
            "image.image"          => "Yüklenen Dosya Resim Formatında Olmalıdır",
            "resume.mimes"         => "CV Dosyası pdf,csv veya txt Uzantılı Olmalıdır",
            "resume.max"           => "CV Dosyası En Fazla 10 MB Olabilir"
        ];
    }
}
