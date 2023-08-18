<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterUsefulLinkStoreRequest extends FormRequest
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
            "name" => ["required", "max:100"],
            "url"  => ["required", "url", "max:200"]
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Link Adı Alanı Doldurulması Zorunludur",
            "name.max"      => "Link Adı Alanı En Fazla 100 Karakter Olabilir",
            "url.required"  => "URL Alanı Doldurulması Zorunludur",
            "url.url"       => "URL link Formatında Olmalıdır",
            "url.max"       => "URL En Fazla 200 Karakterden Oluşabilir"
        ];
    }
}
