<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TyperTitleStoreRequest;
use App\Http\Requests\TyperTitleUpdateRequest;
use App\Models\TyperTitle;
use Illuminate\Http\Request;

class TyperTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typerTitles = TyperTitle::all();
        return view("backend.typer-title.index", compact("typerTitles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.typer-title.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TyperTitleStoreRequest $request)
    {
        $typerTitle = new TyperTitle();
        $typerTitle->title = $request->input("title");
        $typerTitle->save();

        toastr()->success("Hareketli Başlık Başarıyla Oluşturuldu", "Başarılı");

        return redirect()->route("admin.typer-title.index");
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
        $typerTitle = TyperTitle::query()->where("id", $id)->first();
        return view("backend.typer-title.edit", compact("typerTitle"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TyperTitleUpdateRequest $request, $id)
    {
        $update = TyperTitle::where("id", $id)->update([
           'title' => $request->input("title")
        ]);

        $update ? toastr()->success("Hareketli Başlık Başarıyla Güncellendi", "Başarılı") : toastr()->error("Hareketli Başlık Güncelleme Başarısız", "Başarısız");

        return redirect()->route("admin.typer-title.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $typerTitle = TyperTitle::findOrFail($id);
        $typerTitle->delete();
    }
}
