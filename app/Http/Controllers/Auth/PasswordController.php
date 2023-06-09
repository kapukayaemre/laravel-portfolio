<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password'         => ['required', Password::defaults(), 'confirmed'],
        ], [
            'current_password.required'        => 'Mevcut şifre alanı boş bırakılamaz',
            'current_password.curren_password' => 'Girilen şifre mevcut şifreyle eşleşmiyor',
            'password.required'                => 'Şifre alanı boş bırakılamaz'
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        toastr()->success('Parola Başarıyla Güncellendi');
        return back()->with('status', 'password-updated');
    }
}
