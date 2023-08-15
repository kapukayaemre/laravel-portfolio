<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view("backend.about.index", compact("about"));
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
    public function update(AboutUpdateRequest $request, $id)
    {
        $about = About::first();

        /*** Its getting image path from helper function
         * (first parameter name and column name(they must be same))
         * (second paremeter model name, we select it above this comment lines)
         */
        $imagePath = handleUpload('image', $about, "about");
        $resumePath = handleUpload('resume', $about, "about");

        $update = About::updateOrCreate(
            ['id' => $id],
            [
                'title'       => $request->title,
                'description' => $request->description,
                'image'       => (!empty($imagePath) ? $imagePath : $about->image),
                'resume'      => (!empty($resumePath) ? $resumePath : $about->resume)
            ]);

        $update ?
            toastr()->success("Hakkımda Bölümü Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı");

        return redirect()->route("admin.about.index");
    }

    public function resume_download()
    {
        $about = About::first();
        return response()->download(public_path($about->resume));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
