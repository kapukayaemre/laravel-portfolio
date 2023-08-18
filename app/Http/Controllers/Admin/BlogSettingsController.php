<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogSettingsUpdateRequest;
use App\Models\BlogSetting;
use Illuminate\Http\Request;

class BlogSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogSettings = BlogSetting::first();
        return view("backend.blog-section-setting.index", compact("blogSettings"));
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
    public function update(BlogSettingsUpdateRequest $request, $id)
    {
        $update = BlogSetting::updateOrCreate(
            ["id" => $id],
            [
                "title"     => $request->input("title"),
                "sub_title" => $request->input("sub_title")
            ]);

        $update ?
            toastr()->success("Blog Ayarları Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.blog-section-settings.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
