<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("backend.portfolio-category.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.portfolio-category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioCategoryRequest $request)
    {
        $categoryName = $request->input("name");
        $category     = Category::create([
            "name" => $categoryName,
            "slug" => Str::slug($categoryName)
        ]);

        $category ?
            toastr()->success("Kategori Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.category.index");
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
        $category = Category::findOrFail($id);
        return view("backend.portfolio-category.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortfolioCategoryRequest $request, $id)
    {
        $categoryName = $request->input("name");
        $category = Category::where("id", $id)->update([
            "name" => $categoryName,
            "slug" => Str::slug($categoryName)
        ]);

        $category ?
            toastr()->success("Kategori Başarıyla Güncellendi", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoryName = Category::findOrFail($id);
        $categoryName->delete();
    }
}
