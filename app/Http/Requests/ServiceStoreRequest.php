<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            'name'        => 'required|max:200',
            'description' => 'required|max:500'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'        => 'Hizmet Adı Alanı Boş Geçilemez',
            'name.max'             => 'Hizmet Adı En Fazla 200 Karakterden Oluşalabilir',
            'description.required' => 'Hizmet Açıklaması Alanı Boş Geçilemez',
            'description.max'      => 'Hizmet Açıklaması En Fazla 500 Karakterden Oluşabilir'
        ];
    }
}
