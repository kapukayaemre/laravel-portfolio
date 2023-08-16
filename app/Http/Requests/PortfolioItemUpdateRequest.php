<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioItemUpdateRequest extends FormRequest
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
            "image"       => ["image", "max:5000"],
            "title"       => ["required", "max:200"],
            "description" => ["required"],
            "category_id" => ["required", "numeric"],
            "client"      => ["max:200"],
            "website"     => ["url"]
        ];
    }

    public function messages(): array
    {
        return [
            "image.image"          => "Seçtiğiniz dosya resim olmalıdır",
            "image.max"            => "Portfolio Parçası Resim En Fazla 5 MB Olabilir",
            "title.required"       => "Başlık Alanı Doldurulması Zorunludur",
            "title.max"            => "Başlık En Fazla 200 Karakterden Oluşabilir",
            "description.required" => "Açıklama Alanı Doldurulması Zorunludur",
            "category_id.required" => "Kategori Alanı Doldurulması Zorunludur",
            "category_id.numeric"  => "Uygun Formatta Kategori Seçiniz",
            "client.max"           => "Müşteri Alanı En Fazla 200 Karakter Oluşabilir",
            "website.url"          => "Web Sitesi Alanı URL olmalıdır"
        ];
    }
}
