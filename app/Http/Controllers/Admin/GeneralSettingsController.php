<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsUpdateRequest;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = GeneralSetting::first();
        return view("backend.setting.general-setting.index", compact("logos"));
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
    public function update(SettingsUpdateRequest $request, $id)
    {
        $settings   = GeneralSetting::first();
        $logo       = handleUpload("logo", $settings, "settings");
        $footerLogo = handleUpload("footer_logo", $settings, "settings");
        $favicon    = handleUpload("favicon", $settings, "settings");

        $update = GeneralSetting::updateOrCreate(
            ['id' => $id],
            [
                'logo'        => (!empty($logo) ? $logo : $settings->logo),
                'footer_logo' => (!empty($footerLogo) ? $footerLogo : $settings->footer_logo),
                'favicon'     => (!empty($favicon) ? $favicon : $settings->favicon),
            ]);

        $update ?
            toastr()->success("Genel Ayarlar Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı");

        return redirect()->route("admin.general-settings.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
