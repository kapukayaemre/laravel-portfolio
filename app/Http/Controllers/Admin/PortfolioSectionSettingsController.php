<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioSectionSettingsUpdateRequest;
use App\Models\PortfolioSectionSetting;
use Illuminate\Http\Request;

class PortfolioSectionSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfoliSectionSettings = PortfolioSectionSetting::first();
        return view("backend.portfolio-section-setting.index", compact("portfoliSectionSettings"));
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
    public function update(PortfolioSectionSettingsUpdateRequest $request, $id)
    {
        $update = PortfolioSectionSetting::query()->updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->input("title"),
                'sub_title' => $request->input("sub_title")
            ]);

        $update ?
            toastr()->success("Portfolio Bölümü Ayarları Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.portfolio-section-setting.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
