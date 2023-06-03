<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TyperTitleDataTable;
use App\Http\Controllers\Controller;
use App\Models\TyperTitle;
use Illuminate\Http\Request;

class TyperTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TyperTitleDataTable $dataTable)
    {
        return $dataTable->render('admin.typer-title.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.typer-title.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200'
        ]);

        $insert = TyperTitle::create([
            'title' => $request->title
        ]);

        if ($insert) {
            return response()
                ->json(['status' => 'success', 'message' => 'Kayıt Başarılı'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => 'error', 'message' => 'Kayıt Başarısız'])
                ->setStatusCode(401);
        }
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
    public function edit(int $id)
    {
        $title = TyperTitle::findOrFail($id);
        return view('admin.typer-title.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|max:200'
        ]);

        $update = TyperTitle::query()->where('id', $id)->update([
           'title' => $request->title
        ]);

        if ($update) {
            return response()
                ->json(['status' => 'success', 'message' => 'Güncelleme Başarılı'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => 'error', 'message' => 'Güncelleme Başarısız'])
                ->setStatusCode(401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $delete = TyperTitle::findOrFail($id);
        $delete->delete();

        if ($delete) {
            return response()
                ->json(['status' => 'success', 'message' => 'Silme İşlemi Başarılı'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => 'error', 'message' => 'Silme İşlemi Başarısız'])
                ->setStatusCode(401);
        }

    }
}
