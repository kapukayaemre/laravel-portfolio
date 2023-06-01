<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeroUpdateRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.hero.index');
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        $heroData = [
            'title'       => $request->title,
            'sub_title'   => $request->sub_title,
            'button_text' => $request->button_text,
            'button_url'  => $request->button_url
        ];

        /**? Before the save new datas getting old datas for unlink old image*/
        $hero = Hero::find($id);

        if ($request->hasFile('image')) {
            $heroData['image'] = $imagePath;

            /**? if there is a data and data have image */
            if ($hero && $hero->image) {
                $oldImagePath = public_path($hero->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        } else {
            /**? if user didn't send an image set null image column on database */
            $heroData['image'] = null;

            /**? if user didn't send an image but old data has an image we need to remove it */
            if ($hero && $hero->image) {
                $oldImagePath = public_path($hero->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        Hero::updateOrCreate(['id' => $id], $heroData);

        flash()
            ->option('position', 'top-center')
            ->addSuccess('Updated Successfully !');

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
