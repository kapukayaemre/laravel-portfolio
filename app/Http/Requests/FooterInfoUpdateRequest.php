<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterInfoUpdateRequest extends FormRequest
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
            "info" => ["max:200"],
            "copyright" => ["max:200"],
            "powered_by" => ["max:200"],
        ];
    }

    public function messages(): array
    {
        return [
            "info.max" => "Bilgi Alanı En Fazla 200 Karakter İçerebilir",
            "copyright.max" => "Copyright Alanı En Fazla 200 Karakter İçerebilir",
            "powered_by.max" => "Powered By Alanı En Fazla 200 Karakter İçerebilir"
        ];
    }
}
