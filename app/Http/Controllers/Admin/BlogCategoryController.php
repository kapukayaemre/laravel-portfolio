<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogCategories = BlogCategory::all();
        return view("backend.blog-category.index", compact("blogCategories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.blog-category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ["name" => ["required", "max:200"]],
            [
                "name.required" => "Kategori Adı Zorunlu Alandır",
                "name.max"      => "Kategori Adı En Fazla 200 Karakterden Oluşabilir"
            ]
        );

        $category = new BlogCategory();
        $category->name = $request->input("name");
        $category->slug = Str::slug($request->input("name"));
        $category->save();

        toastr()->success("Blog Kategorisi Başarıyla Oluşturuldu", "Başarılı");

        return redirect()->route("admin.blog-category.index");

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
