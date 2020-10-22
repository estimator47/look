<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Requests\ModelRequest,
    Models\Catalog
};

class ModelController extends Controller
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
        $models = $this->repository->funcModel($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.model-standard", ['models' => $models])->render(),
            ]);
        }

        //submit
        return view('back.model', ['models' => $models]);
    }

    /**
     * Create a new view for creating a new model in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.models.create');
    }


    /**
     * Upload  third image for new models in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $image->move(public_path('images/katalog'), $imageName);

        return response()->json(['success' => true, 'image' => $imageName]);
//            return view('back.models.create', ['image' => $imageName]);
    }

    /**
     * Store a newly created Catalog in storage.
     *
     * @param \App\Http\Requests\ModelRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModelRequest $request)
    {
        $this->repository->storeModel($request);

        return redirect(route('modeli'))->with('model-ok', "Новый модель добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Http\Requests\ModelRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $model)
    {
        return view('back.models.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ModelRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(ModelRequest $request, Catalog $model)
    {
        $this->repository->updateModel($request, $model);

        return redirect(route('modeli'))->with('model-ok', 'модель была изменена..');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param \App\Http\Requests\ModelRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Catalog $model)
    {
        $model->delete();

        return $this->index($request);
    }

    /**
     * Show the application single news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modelSingle($id, Catalog $model)
    {
        $model = $model->find($id);
        return view('back.model-single', compact('model'));
    }

}
