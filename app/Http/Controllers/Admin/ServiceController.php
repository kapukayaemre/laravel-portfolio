<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ServiceDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use function Termwind\render;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServiceDataTable $dataTable)
    {
        return $dataTable->render('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $insert = Service::create([
            'name'        => $request->name,
            'description' => $request->description
        ]);

        if ($insert) {
            return response()
                ->json(['status' => 'success', 'message' => 'İşlem Başarılı'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => 'error', 'message' => 'İşlem Başarısız'])
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
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $update = Service::where('id', $id)->update([
            'name'        => $request->name,
            'description' => $request->description
        ]);

        if($update) {
            return response()
                ->json(['status' => 'success', 'message' => 'İşlem Başarılı'])
                ->setStatusCode(200);
        } else {
            return response()
                ->json(['status' => 'error', 'message' => 'İşlem Başarısız'])
                ->setStatusCode(401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $service = Service::findOrfail($id);
        $delete = $service->delete();

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
