<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillItemStoreRequest extends FormRequest
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
            "name"    => ["required", "max:100"],
            "percent" => ["required", "numeric", "max:100"]
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"    => "Yetenek Adı Zorunlu Alandır",
            "name.max"         => "Yetenek Adı En Fazla 100 Karakterden Oluşabilir",
            "percent.required" => "Yetenek Yüzdesi Zorunlu Alandır",
            "percent.numeric"  => "Yetenek Yüzdesi Sayısal Olmalıdır",
            "percent.max"      => "Yetenek Yüzdesi En Fazla 100'e Kadar Olabilir"
        ];
    }
}
