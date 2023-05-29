<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['string', 'max:50'],
            'last_name'  => ['string', 'max:50'],
            'about'      => ['max:500'],
            'phone'      => ['integer'],
            'email'      => ['email', 'max:50', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.string' => 'Rakam veya özel karakter kullanmayın',
            'first_name.max'    => 'En fazla 50 karakter girilebilir',
            'last_name.string'  => 'Rakam veya özel karakter kullanmayın',
            'last_name.max'     => 'En fazla 50 karakter girilebilir',
            'about.max'         => 'En fazla 500 karakter girilebilir',
            'phone.integer'     => 'Telefon numaralardan oluşmalıdır',
            'email.email'       => 'Email formatında giriş yapın',
            'email.max'         => 'Email en fazla 50 karakterden oluşmalıdır',
            'email.unique'      => 'Email benzersiz olmalıdır'
        ];
    }
}
