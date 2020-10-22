<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\FrontRepository
     * @var \App\Repositories\AdminRepository
     */
    protected $repository; //FrontRepository or AdminRepository

    /**
     * The namespace
     *
     * @var string
     */
    protected $namespace; //front or back

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */

    public function index(Request $request)
    {
        $news = $this->repository->funcNews($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".brick-standard", ['news' => $news])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.index', ['news' => $news]);
    }



}
