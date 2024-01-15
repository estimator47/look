<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $materials = Material::query()->get();

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "back.material-standard", compact('materials'))->render(),
            ]);
        }

        //submit
        return view( 'back.material', compact('materials'));
    }

    /**
     * Create a new view for creating a new material in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.materials.create');
    }
    // image upload for new material
    public function uploadImage(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $image->move(public_path('images/fabric'), $imageName);

        return response()->json(['success' => true, 'image' => $imageName]);
    }

    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\MaterialRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $request, Material $material)
    {
        $material->material_en = $request->material_en;
        $material->material_ru = $request->material_ru;
        $material->img = $request->img;
        $material->save();

        return redirect(route('material'))->with('material-ok', "Материал добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('back.materials.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(MaterialRequest $request, Material $material)
    {
        $material->material_en = $request->material_en;
        $material->material_ru = $request->material_ru;
        $material->img = $request->img;
        $material->save();

        return redirect(route('material'))->with('material-ok', 'Материал было изменено..');
    }

    public function destroy(Request $request, Material $material)
    {
        $material->delete();
        unlink($_SERVER['DOCUMENT_ROOT'] ."/images/fabric/" .$material->img);

        return $this->index($request);
    }
}
