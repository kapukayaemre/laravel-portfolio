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
            'name' => ['required','string', 'max:50'],
            'surname' => ['required','string', 'max:50'],
            'email' => ['required','email', 'max:50', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['required', 'max:30'],
            'image' => ["image", "max:5000"]
        ];
    }
}
