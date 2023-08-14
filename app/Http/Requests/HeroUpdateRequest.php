<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroUpdateRequest extends FormRequest
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
            'title'     => ['required', 'max:200'],
            'sub_title' => ['required', 'max:500'],
            'image'     => ['max:5000', 'image']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'     => 'Başlık Alanı Zorunludur',
            'title.max'          => 'Başlık Alanı En Fazla 200 Karakterden Oluşabilir',
            'sub_title.required' => 'Alt Başlık Alanı Zorunludur',
            'sub_title.max'      => 'Alt Başlık Alanı En Fazla 500 Karakterden Oluşabilir',
            'image.max'          => 'Resim En Fazla 5 MB Olabilir',
            'image.image'        => 'Lütfen Resim Türünde Bir Dosya Yükleyin'
        ];
    }
}
