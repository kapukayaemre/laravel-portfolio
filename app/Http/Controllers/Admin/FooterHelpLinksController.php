<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterHelpLinkStoreRequest;
use App\Models\FooterHelpLink;
use Illuminate\Http\Request;

class FooterHelpLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helpLinks = FooterHelpLink::all();
        return view("backend.footer-help-link.index", compact("helpLinks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.footer-help-link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FooterHelpLinkStoreRequest $request)
    {
        $create = FooterHelpLink::create([
            "name" => $request->input("name"),
            "url"  => $request->input("url")
        ]);

        $create ?
            toastr()->success("Footer Yardım Linki Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-help-links.index");
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
        $helpLink = FooterHelpLink::findOrFail($id);
        return view("backend.footer-help-link.edit", compact("helpLink"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = FooterHelpLink::where("id", $id)->update([
            "name" => $request->input("name"),
            "url"  => $request->input("url")
        ]);

        $update ?
            toastr()->success("Footer Yardım Linki Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-help-links.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $helpLink = FooterHelpLink::findOrFail($id);
        $helpLink->delete();
    }
}
