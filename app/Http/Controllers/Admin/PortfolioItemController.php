<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioItemStoreRequest;
use App\Models\Category;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolioItems = PortfolioItem::all();
        return view("backend.portfolio-item.index", compact("portfolioItems"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("backend.portfolio-item.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioItemStoreRequest $request)
    {
        $create = PortfolioItem::create([
            "image"       => handleUpload("image", "", "portfolio-item"),
            "title"       => $request->input("title"),
            "description" => $request->input("description"),
            "category_id" => $request->input("category_id"),
            "client"      => $request->input("client"),
            "website"     => $request->input("website")
        ]);

        $create ?
            toastr()->success("Portfolio Parçası Başarıyla Oluşturuldu", "Başarılı") :
            toastr()->error("İşlem Başarısız Sonuçlandı", "Başarısız");

        return redirect()->route("admin.portfolio-item.index");
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
