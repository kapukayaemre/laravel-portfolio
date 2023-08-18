<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterUsefulLinkStoreRequest;
use App\Models\FooterUsefulLink;
use Illuminate\Http\Request;

class FooterUsefulLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usefulLinks = FooterUsefulLink::all();
        return view("backend.footer-useful-link.index", compact("usefulLinks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.footer-useful-link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FooterUsefulLinkStoreRequest $request)
    {
        $create = FooterUsefulLink::create([
            "name" => $request->input("name"),
            "url"  => $request->input("url")
        ]);

        $create ?
            toastr()->success("Footer Kullanışlı Link Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-useful-links.index");
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
        $usefulLink = FooterUsefulLink::findOrFail($id);
        return view("backend.footer-useful-link.edit", compact("usefulLink"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FooterUsefulLinkStoreRequest $request, $id)
    {
        $create = FooterUsefulLink::where("id", $id)->update([
            "name" => $request->input("name"),
            "url"  => $request->input("url")
        ]);

        $create ?
            toastr()->success("Footer Kullanışlı Link Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-useful-links.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usefulLink = FooterUsefulLink::findOrFail($id);
        $usefulLink->delete();
    }
}
