<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\{
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Requests\RubricRequest,
    Models\Tip
};

class TipController extends Controller
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
        $tips = $this->repository->funcTip($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.tips-standard", ['tips' => $tips])->render(),
            ]);
        }

        //submit
        return view('back.tip', ['tips' => $tips]);
    }

    /**
     * Show the application single news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsSingle($id, Tip $model)
    {
        $tip = $model->find($id);
        return view('back.tip-single', compact('tip'));
    }

    /**
     * Create a new view in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tips.create');
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
        return view('back.tips.create', ['image' => $filename]);
    }
    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RubricRequest $request)
    {
        $this->repository->storeTip($request);

        return redirect(route('tip'))->with('tip-ok', "Новая cтатья добавлен..");
    }
    /**
     * Show the tip for editing the specified resource.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        return view('back.tips.edit', compact('tip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(RubricRequest $request, Tip $tip)
    {
        $this->repository->updateTip($request, $tip);

        return redirect(route('tip'))->with('tip-ok', 'Статья была изменено..');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy(Request $request, Tip $tip)
    {
        $tip->delete();

        return $this->index($request);
    }
}
