<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with("category")->get();
        return view("backend.blog.index", compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view("backend.blog.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        $create = Blog::create([
            "image"       => handleUpload("image", "", "blog"),
            "title"       => $request->input("title"),
            "description" => $request->input("description"),
            "category_id" => $request->input("category_id")
        ]);

        $create ?
            toastr()->success("Blog Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.blog.index");
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
        $categories = BlogCategory::all();
        $blog = Blog::findOrFail($id);
        return view("backend.blog.edit", compact("blog", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $imagePath = handleUpload("image", $blog, "blog");

        $create = Blog::where("id", $id)->update([
            "image"       => (!empty($imagePath) ? $imagePath : $blog->image),
            "title"       => $request->input("title"),
            "description" => $request->input("description"),
            "category_id" => $request->input("category_id")
        ]);

        $create ?
            toastr()->success("Blog Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.blog.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        deleteFileIfExist($blog->image);
        $blog->delete();
    }
}
