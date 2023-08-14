<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('backend.profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        if ($request->hasFile("image")) {
            $imageFile         = $request->file("image");
            $originalName      = $imageFile->getClientOriginalName();
            $originalExtension = $imageFile->getClientOriginalExtension();
            $explodeName       = explode(".", $originalName)[0];
            $fileName          = Str::slug($explodeName) . "." . $originalExtension;

            $folder     = "profile";
            $publicPath = "storage/" . $folder;

            if (file_exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            $user->image = $publicPath . "/" . $fileName;

            $imageFile->storeAs($folder, $fileName, "public");
        }

        $user->name      = $request->input('name');
        $user->surname   = $request->input("surname");
        $user->phone     = $request->input("phone");
        $user->email     = $request->input("email");
        $user->github    = $request->input("github");
        $user->linkedin  = $request->input("linkedin");
        $user->facebook  = $request->input("facebook");
        $user->twitter   = $request->input("twitter");
        $user->instagram = $request->input("instagram");

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        toastr()->success("Profil Başarıyla Güncellendi");

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
