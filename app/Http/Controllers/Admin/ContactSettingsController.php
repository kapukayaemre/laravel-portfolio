<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSettingsUpdateRequest;
use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactSectionSettings = ContactSetting::first();
        return view("backend.contact-section-setting.index", compact("contactSectionSettings"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactSettingsUpdateRequest $request, string $id)
    {
        $update = ContactSetting::query()->updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->input("title"),
                'sub_title' => $request->input("sub_title")
            ]);

        $update ?
            toastr()->success("İletişim Bölümü Ayarları Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.contact-section-settings.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
