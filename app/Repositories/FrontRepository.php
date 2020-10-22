<?php

namespace App\Repositories;


use Illuminate\Support\Facades\App;
use App\Models\ {
    Info,
    Message,
    Price,
    Catalog,
    Type,
    Kalonka,
    Tip,
    Form
};
use Illuminate\Support\Facades\DB;
class FrontRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */

    protected $model_info;
    protected $model_catalog;
    protected $model_type;
    protected $model_kalonka;
    protected $model_form;
    protected $model_tip;



    /**
     * Create a new ProductRepository instance.
     *
     * @param  \
     */
    public function __construct(Info $info, Catalog $catalog, Type $type, Kalonka $kalonka, Form $form, Tip $tip)

    {
        $this->model_info = $info;
        $this->model_catalog = $catalog;
        $this->model_type = $type;
        $this->model_kalonka = $kalonka;
        $this->model_form = $form;
        $this->model_tip = $tip;
    }

    /**
     * Create a query for Catalog type.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function catalog_type($id)
    {
        $query = $this->model_type
            ->select('id', 'category_id', 'name_uz', 'name_ru', 'image')
            ->where('category_id', $id)
            ->orderBy('id', 'asc');
        return $query->get();
    }

    /**
     * Create a query for Catalog.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function catalog($id)
    {
        $query = $this->model_catalog
            ->select('id', 'type_id', 'compound_uz', 'color_uz' , 'info_uz', 'compound_ru', 'color_ru' , 'info_ru', 'article', 'size', 'image', 'image2', 'image3')
            ->where('type_id', $id)
            ->orderBy('id', 'asc');
        return $query->get();
    }

    /**
     * Create a query for News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNews($request)
    {
        $query = $this->model_info
            ->select('id', 'name_uz', 'info_uz' , 'name_ru', 'info_ru' , 'image', 'click', 'created_at')
            ->LIMIT (3)
            ->orderBy('id', 'desc');
        return $query->get();
    }
    /**
     * Create a query for Blog.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
   /* public function funcBlog($request)
    {
        $query = $this->model_info
            ->select('id', 'name_uz', 'info_uz' , 'name_ru', 'info_ru' , 'image', 'click', 'created_at')
            ->LIMIT (4)
            ->orderBy('id', 'desc');
        return $query->get();
    }*/

    /**
     * Create a query for more News on blog page.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
   /* public function funcNewsmore($request)
    {
        $query = $this->model_info
            ->select('id', 'name_uz', 'info_uz' , 'name_ru', 'info_ru' , 'image', 'click', 'created_at')
            ->offset(($request->more*2)+2)
            ->limit(2)
            ->orderBy('id', 'desc');
        return $query->get();
    }*/

    /**
     * Create a query for single blog page.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSingle($request)
    {

        $query = $this->model_info
            ->select('id', 'name_uz', 'info_uz' , 'name_ru', 'info_ru' , 'image', 'click', 'created_at')
            ->limit(4)
            ->orderBy('click', 'desc');
        return $query->get();
    }
    /**
     * Create a query for single kalonka stilist page.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcStyle($request)
    {

        $query = $this->model_kalonka
            ->select('id', 'title_uz', 'info_uz' , 'title_ru', 'info_ru' , 'source', 'image', 'click', 'created_at')
            ->limit(4)
            ->orderBy('click', 'desc');
        return $query->get();
    }
    /**
     * Create a query for single modniy obraz page.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcObriz($request)
    {

        $query = $this->model_form
            ->select('id', 'title_uz', 'info_uz' , 'title_ru', 'info_ru' , 'source', 'image', 'click', 'created_at')
            ->limit(4)
            ->orderBy('click', 'desc');
        return $query->get();
    }

    /**
     * Create a query for single useful tips page.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcTips($request)
    {

        $query = $this->model_tip
            ->select('id', 'title_uz', 'info_uz' , 'title_ru', 'info_ru' , 'source', 'image', 'click', 'created_at')
            ->limit(4)
            ->orderBy('click', 'desc');
        return $query->get();
    }
    /**
     * Saving messages.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function message($request)
    {
        Message::create($request->all());

    }

    /**
     * Saving price request.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function askPrice($request)
    {
        Price::create($request->all());

    }


}
