<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterContactInfoUpdateRequest;
use App\Models\FooterContactInfo;
use Illuminate\Http\Request;

class FooterContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactInfo = FooterContactInfo::first();
        return view("backend.footer-contact-info.index", compact("contactInfo"));
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
    public function update(FooterContactInfoUpdateRequest $request, $id)
    {
        $contactInfo = FooterContactInfo::first();
        $update = FooterContactInfo::updateOrCreate(
            ['id' => $id],
            [
                'address'     => $request->input("address"),
                'phone' => $request->input("phone"),
                'email' => $request->input("email")
            ]);

        $update ?
            toastr()->success("Footer İletişim Bilgileri Alanı Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-contact-info.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
