<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedBackStoreRequest;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedBacks = FeedBack::all();
        return view("backend.feedback.index", compact("feedBacks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.feedback.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeedBackStoreRequest $request)
    {
        $create = FeedBack::create([
            "title"       => $request->input("title"),
            "position"    => $request->input("position"),
            "description" => $request->input("description")
        ]);

        $create ?
            toastr()->success("Geri Bildirim Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.feedback.index");
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
