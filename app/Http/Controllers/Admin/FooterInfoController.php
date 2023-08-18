<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterInfoUpdateRequest;
use App\Models\FooterInfo;
use Illuminate\Http\Request;

class FooterInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = FooterInfo::first();
        return view("backend.footer-info.index", compact("info"));
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
    public function update(FooterInfoUpdateRequest $request, $id)
    {
        $info     = FooterInfo::first();

        $update = FooterInfo::updateOrCreate(
            ['id' => $id],
            [
                'info'     => $request->input("info"),
                'copyright' => $request->input("copyright"),
                'powered_by' => $request->input("powered_by")
            ]);

        $update ?
            toastr()->success("Footer Bilgi Alanı Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.footer-info.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
