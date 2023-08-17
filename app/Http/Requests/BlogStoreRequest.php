<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
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
            "image"       => ["required", "max:5000", "image"],
            "title"       => ["required", "max:200"],
            "description" => ["required"],
            "category_id" => ["required", "numeric"]
        ];
    }

    public function messages(): array
    {
        return [
            "image.required"       => "Resim Alanı Doldurulması Zorunludur",
            "image.max"            => "Resim En Fazla 5 MB Olabilir",
            "image.image"          => "Seçilen Dosya Resim Formatında Olmalıdır",
            "title.required"       => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"            => "Başlık Alanı En Fazla 200 Karakterden Oluşabilir",
            "description.required" => "Açıklama Alanı Doldurulması Zorunludur",
            "category_id.required" => "Kategori Seçilmesi Zorunludur",
            "category_id.numeric"  => "Uygun Kategori Seçiniz"
        ];
    }
}
