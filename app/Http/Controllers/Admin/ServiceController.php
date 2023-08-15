<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view("backend.service.index", compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.service.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $service = Service::create([
            "name"        => $request->input("name"),
            "description" => $request->input("description")
        ]);

        $service ?
            toastr()->success("Yeni Hizmet Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.service.index");
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
        $service = Service::query()->where("id", $id)->first();
        return view("backend.service.edit", compact("service"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceStoreRequest $request, $id)
    {
        $update = Service::where("id", $id)->update([
            "name"        => $request->input("name"),
            "description" => $request->input("description")
        ]);

        $update ?
            toastr()->success("Hizmet Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.service.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

    }
}
