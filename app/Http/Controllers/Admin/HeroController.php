<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeroUpdateRequest;
use App\Models\Hero;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::query()->where('id', 1)->first();
        return view("backend.hero.index", compact("hero"));
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
    public function update(HeroUpdateRequest $request, $id)
    {
        $hero = Hero::first();

        if ($request->hasFile("image"))
        {
            $imageFile = $request->file("image");
            $originalName = $imageFile->getClientOriginalName();
            $originalExtension = $imageFile->getClientOriginalExtension();
            $explodeName = explode(".", $originalName)[0];
            $fileName = Str::slug($explodeName). "." . $originalExtension;

            $folder = "hero";
            $publicPath = "storage/". $folder;

            if (file_exists(public_path($hero->image)))
            {
                File::delete(public_path($hero->image));
            }

            $imagePath = $publicPath . "/" . $fileName;

            $imageFile->storeAs($folder, $fileName, 'public');

        }

        Hero::where("id", 1)
            ->update([
                'title' => $request->input("title"),
                'sub_title' => $request->input("sub_title"),
                'button_text' => $request->input("button_text"),
                'button_url' => $request->input("button_url"),
                'image' => isset($imagePath) ? $imagePath : $hero->image,
            ]);

        toastr()->success("Hero Bölümü Başarıyla Güncellendi", "Başarılı");


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
