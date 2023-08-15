<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TyperTitleStoreRequest extends FormRequest
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
            "title" => ["required", "max:200"]
        ];
    }

    public function messages(): array
    {
        return [
            "title.required" => "Hareketli Başlık Alanı Doldurulması Zorunludur",
            "title.max"      => "Hareketli Başlık En Fazla 200 Karakterden Oluşabilir"
        ];
    }
}
