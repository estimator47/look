<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\{Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Requests\RubricRequest,
    Models\Form};

class FormController extends Controller
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
        $forms = $this->repository->funcObriz($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.modniy-standard", ['forms' => $forms])->render(),
            ]);
        }

        //submit
        return view('back.modniy', ['forms' => $forms]);
    }

    /**
     * Show the application single news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsSingle($id, Form $model)
    {
        $form = $model->find($id);
        return view('back.modniy-single', compact('form'));
    }

    /**
     * Create a new view in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.forms.create');
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
        $file->move(public_path() . '/images/rubrika/', $filename);
        return view('back.forms.create', ['image' => $filename]);
    }
    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RubricRequest $request)
    {
        $this->repository->storeObriz($request);

        return redirect(route('modniy'))->with('form-ok', "Новая cтатья добавлен..");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('back.forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(RubricRequest $request, Form $form)
    {
        $this->repository->updateObriz($request, $form);

        return redirect(route('modniy'))->with('form-ok', 'Статья была изменено..');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Form $form)
    {
        $form->delete();

        return $this->index($request);
    }
}
