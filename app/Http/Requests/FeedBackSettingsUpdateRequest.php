<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackSettingsUpdateRequest extends FormRequest
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
            "title"     => ["required", "max:100"],
            "sub_title" => ["required", "max:500"]
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"     => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"          => "Başlık Alanı En Fazla 100 Karakterden Oluşabilir",
            "sub_title.required" => "Alt Başlık Alanı Doldurulması Zorunludur",
            "sub_title.max"      => "Alt Başlık Alanı En Fazla 500 Karakterden Oluşabilir"
        ];
    }
}
