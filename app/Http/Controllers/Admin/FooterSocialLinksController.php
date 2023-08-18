<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSocialLink;
use Illuminate\Http\Request;

class FooterSocialLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialLinks = FooterSocialLink::all();
        return view("backend.footer-social-link.index", compact("socialLinks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.footer-social-link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "icon" => ["required"],
                "url"  => ["required"]
            ],
            [
                "icon.required" => "Icon Alanı Boş Geçilemez",
                "url.required"  => "URL Alanı Boş Geçilemez"
            ]);

        $create = FooterSocialLink::create([
            "icon" => $request->input("icon"),
            "url"  => $request->input("url")
        ]);

        $create ?
            toastr()->success("Footer Sosyal Linki Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-social.index");
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
    public function edit($id)
    {
        $socialLink = FooterSocialLink::findOrFail($id);
        return view("backend.footer-social-link.edit", compact("socialLink"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                "icon" => ["required"],
                "url"  => ["required"]
            ],
            [
                "icon.required" => "Icon Alanı Boş Geçilemez",
                "url.required"  => "URL Alanı Boş Geçilemez"
            ]);

        $create = FooterSocialLink::where("id", $id)->update([
            "icon" => $request->input("icon"),
            "url"  => $request->input("url")
        ]);

        $create ?
            toastr()->success("Footer Sosyal Linki Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-social.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $socialLink = FooterSocialLink::findOrFail($id);
        $socialLink->delete();
    }
}
