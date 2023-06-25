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
        return view('admin.about.index', compact('about'));
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
    public function update(AboutUpdateRequest $request, int $id)
    {
        $about = About::first();

        /*** Its getting image path from helper function
         * (first parameter name and column name(they must be same))
         * (second paremeter model name, we select it above this comment lines)
         */
        $imagePath = handleUpload('image', $about);
        $resumePath = handleUpload('resume', $about);

        $update = About::updateOrCreate(
            ['id' => $id],
            [
                'title'       => $request->title,
                'description' => $request->description,
                'image'       => (!empty($imagePath) ? $imagePath : $about->image),
                'resume'      => (!empty($resumePath) ? $resumePath : $about->resume)
            ]);

        if ($update) {
            return response()
                ->json(['status' => 'success', 'message' => 'İşlem Başarılı'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => 'error', 'message' => 'İşlem Başarısız'])
                ->setStatusCode(400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
