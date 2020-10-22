<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\{
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Requests\RubricRequest,
    Models\Kalonka
};

class KalonkaController extends Controller
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
        $kalonkas = $this->repository->funcKalonka($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.kalonka-standard", ['kalonkas' => $kalonkas])->render(),
            ]);
        }

        //submit
        return view('back.kalonka', ['kalonkas' => $kalonkas]);
    }

    /**
     * Show the application single news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsSingle($id, Kalonka $model)
    {
        $kalonka = $model->find($id);
        return view('back.kalonka-single', compact('kalonka'));
    }

    /**
     * Create a new view in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kalonkas.create');
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
        return view('back.kalonkas.create', ['image' => $filename]);
    }
    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RubricRequest $request)
    {
        $this->repository->storeKalonka($request);

        return redirect(route('kalonka'))->with('kalonka-ok', "Новая cтатья добавлен..");
    }
    /**
     * Show the kalonka for editing the specified resource.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Kalonka $kalonka)
    {
        return view('back.kalonkas.edit', compact('kalonka'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(RubricRequest $request, Kalonka $kalonka)
    {
        $this->repository->updateKalonka($request, $kalonka);

        return redirect(route('kalonka'))->with('kalonka-ok', 'Статья была изменено..');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Kalonka $kalonka)
    {
        $kalonka->delete();

        return $this->index($request);
    }
}
