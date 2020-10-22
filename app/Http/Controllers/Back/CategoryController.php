<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Requests\CategoryRequest,
    Models\Type,
    Models\Category
};

class CategoryController extends Controller
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
        $categories = $this->repository->category($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.category-standard", ['categories' => $categories])->render(),
            ]);
        }

        //submit
        return view('back.category', ['categories' => $categories]);
    }

    /**
     * Create a new view for creating a new catalog in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.categories.create');
    }


    /**
     * Store a newly created Category in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->repository->storeCategory($request);

        return redirect(route('category_back'))->with('category-ok', "Новая категория добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('back.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $this->repository->updateCategory($request, $category);

        return redirect(route('category_back'))->with('category-ok', 'Категория была изменена..');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        $category->delete();

        return $this->index($request);
    }

}
