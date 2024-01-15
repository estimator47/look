<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        $types = Type::query()->get();

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "back.type-standard", compact('types'))->render(),
            ]);
        }

        //submit
        return view( 'back.type', compact('types'));
    }
    /**
     * Create a new view for creating a new Catalog in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.types.create');
    }


    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\TypeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request, Type $type)
    {
        $type->type_en = $request->type_en;
        $type->type_ru = $request->type_ru;
        $type->save();

        return redirect(route('type'))->with('type-ok', "Каталог добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('back.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(TypeRequest $request, Type $type)
    {
        $type->type_en = $request->type_en;
        $type->type_ru = $request->type_ru;
        $type->save();

        return redirect(route('type'))->with('type-ok', 'Каталог было изменено..');
    }

    public function destroy(Request $request, Type $type)
    {
        $type->delete();

        return $this->index($request);
    }

}
