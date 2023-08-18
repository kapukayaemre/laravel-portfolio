<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsUpdateRequest extends FormRequest
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
            "logo"        => ["required", "max:5000", "image"],
            "footer_logo" => ["required", "max:5000", "image"],
            "favicon"     => ["required", "max:5000", "image"],
        ];
    }

    public function messages(): array
    {
        return [
            "logo.required"        => "Logo Alanı Doldurulması Zorunludur",
            "logo.max"             => "Logo En Fazla 5 MB Olabilir",
            "logo.image"           => "Seçilen Dosya Resim Formatında Olmalıdır",
            "footer_logo.required" => "Footer Logo Alanı Doldurulması Zorunludur",
            "footer_logo.max"      => "Footer Logo Alanı En Fazla 5 MB Olabilir",
            "footer_logo.image"    => "Seçilen Dosya Resim Formatında Olmalıdır",
            "favicon.required"     => "Favicon Alanı Doldurulması Zorunludur",
            "favicon.max"          => "Favicon En Fazla 5 MB Olabilir",
            "favicon.image"        => "Seçilen Dosya Resim Formatında Olmalıdır"
        ];
    }
}
