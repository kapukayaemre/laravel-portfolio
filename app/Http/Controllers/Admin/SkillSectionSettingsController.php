<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillSectionUpdateRequest;
use App\Models\SkillSectionSetting;
use Illuminate\Http\Request;

class SkillSectionSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = SkillSectionSetting::first();
        return view("backend.skill-section-setting.index", compact("skills"));
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
    public function update(SkillSectionUpdateRequest $request, $id)
    {
        $skill     = SkillSectionSetting::first();
        $imagePath = handleUpload("image", $skill, "skill-section-images");

        $update = SkillSectionSetting::updateOrCreate(
            ['id' => $id],
            [
                'title'     => $request->input("title"),
                'sub_title' => $request->input("sub_title"),
                'image'     => (!empty($imagePath) ? $imagePath : $skill->image)
            ]);

        $update ?
            toastr()->success("Yetenekler Bölümü Ayarları Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.skills-section-settings.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
