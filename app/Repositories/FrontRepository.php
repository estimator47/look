<?php

namespace App\Repositories;


use Illuminate\Support\Facades\App;
use App\Models\{Blog, Catalog, Material};
use Illuminate\Support\Facades\DB;
class FrontRepository
{


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \
     */
    public function __construct()

    {

    }

    /**
     * Create a query for News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcProducts($material, $request)
    {
        $lang = App::getLocale();
        if ($lang == 'en') $text = "en";
        else $text = $lang;


        $query = Catalog::where('material_id', $material->id)
        ->with('products')->with('colors');
        if(isset($request->sort)) {
            $query->where('type_id', $request->sort);
        }
        elseif(isset($request->search)) {
            $query->where('title_' .$text, 'like', '%' . $request->search . '%');
        }

         return $query->get();
    }


    /**
     * Create a query for News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function blog($request)
    {
        $lang = App::getLocale();
        if ($lang == 'en') $text = "en";
        else $text = $lang;

        $query = Blog::select('id', 'title_en', 'text_en' , 'title_ru', 'text_ru' , 'video', 'image', 'click', 'created_at')
            ->LIMIT (6)
            ->orderBy('id', 'desc');
        if(isset($request->search)) {
            $query->where('title_' .$text, 'like', '%' . $request->search . '%');
        }
        return $query->get();
    }

    /**
     * Create a query for more News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function blogMore($request)
    {
            $query = Blog::select('id', 'title_en', 'text_en' , 'title_ru', 'text_ru' , 'video', 'image', 'click', 'created_at')
            ->offset(($request->more*2)+4)
            ->limit(2)
            ->orderBy('id', 'desc');
           return $query->get();
    }



}
