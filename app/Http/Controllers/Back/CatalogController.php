<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
    Http\Controllers\Controller,
    Models\Catalog,
    Repositories\AdminRepository,
    Http\Requests\CatalogRequest,
    Models\Type
};

class CatalogController extends Controller
{

    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function __construct(AdminRepository $repository)
    {

        //$this->middleware('auth');

        $this->repository = $repository;
        $this->namespace = 'back';
    }


    public function index(Request $request)
    {
        $catalogs = $this->repository->catalog($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.catalog-standard", ['catalogs' => $catalogs])->render(),
            ]);
        }

        //submit
        return view('back.catalog', ['catalogs' => $catalogs]);
    }

    /**
     * Create a new view for creating a new catalog in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.catalogs.create');
    }

    /**
     * Upload a new image for new catalog in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/type/', $filename);
        return view('back.catalogs.create', ['image' => $filename]);
    }
    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogRequest $request)
    {
       $this->repository->storeCatalog($request);

       return redirect(route('katalog'))->with('catalog-ok', "Новый каталог добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Requests\CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $catalog)
    {
       return view('back.catalogs.edit', compact('catalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(CatalogRequest $request, Type $catalog)
    {
       $this->repository->updateCatalog($request, $catalog);

       return redirect(route('katalog'))->with('catalog-ok', 'Каталог было изменено..');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Type $catalog)
    {
        $catalog->delete();

        return $this->index($request);
    }

}
