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
            'title'       => 'required|max:200',
            'description' => 'required|max:5000',
            'image'       => 'image|max:5000',
            'resume'      => 'mimes:pdf,csv,txt|max:10000'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'       => 'Başlık Alanı Doldurulması Zorunludur',
            'title.max'            => 'Başlık Alanı En Fazla 200 Karakterden Oluşabilir',
            'description.required' => 'İçerik Alanı Doldurulması Zorunludur',
            'description.max'      => 'İçerik Alanı En Fazla 1000 Karakterden Oluşabilir',
            'image.max'            => 'Bir Resim En Fazla 5 MB Olabilir',
            'image.image'          => 'Lütfen Resim Dışında Bir Dosya Eklemeyin',
            'resume.mimes'         => 'CV İçin Desteklenen Formatlar Pdf,Word,Text Dosyalarıdır',
            'resume.max'           => 'CV Dosyanız En Fazla 10MB Olmalıdır'
        ];
    }
}
