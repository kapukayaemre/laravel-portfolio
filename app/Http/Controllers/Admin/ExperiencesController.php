<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperiencesUpdateRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::first();
        return view("backend.experience.index", compact("experiences"));
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
    public function update(ExperiencesUpdateRequest $request, $id)
    {
        $experiences = Experience::find($id);
        $imagePath   = handleUpload('image', $experiences, "experiences");

        $update = Experience::updateOrCreate(
            ['id' => $id],
            [
                'image'       => (!empty($imagePath) ? $imagePath : $experiences->image),
                'title'       => $request->input("title"),
                'description' => $request->input("description"),
                'phone'       => $request->input("phone"),
                'email'       => $request->input("email")
            ]);

        $update ?
            toastr()->success("Tecrübeler Bölümü Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı");

        return redirect()->route("admin.experiences.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
