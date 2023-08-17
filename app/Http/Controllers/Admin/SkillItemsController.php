<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillItemStoreRequest;
use App\Models\SkillItem;
use Illuminate\Http\Request;

class SkillItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = SkillItem::all();
        return view("backend.skill-item.index", compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.skill-item.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillItemStoreRequest $request)
    {
        $create = SkillItem::create([
            "name"    => $request->input("name"),
            "percent" => $request->input("percent"),
            "color"   => $request->input("color")
        ]);

        $create ?
            toastr()->success("Yeni Yetenek Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.skills-items.index");
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
        $skillItem = SkillItem::findOrFail($id);
        return view("backend.skill-item.edit", compact("skillItem"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillItemStoreRequest $request, string $id)
    {
        $update = SkillItem::where("id", $id)->update([
            "name"    => $request->input("name"),
            "percent" => $request->input("percent"),
            "color"   => $request->input("color")
        ]);

        $update ?
            toastr()->success("Yeni Yetenek Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.skills-items.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skillItem = SkillItem::findOrFail($id);
        $skillItem->delete();
    }
}
