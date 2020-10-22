<?php

namespace App\Repositories;

use App\Models\ {

    Info,
    Message,
    Price,
    Type,
    Catalog,
    Category,
    Form,
    Tip,
    Kalonka
};


class AdminRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_info;
    protected $model_type;
    protected $model_catalog;
    protected $model_category;
    protected $model_kalonka;
    protected $model_form;
    protected $model_tip;


    /**
     * Create a new Card Repository instance.
     *
     * @param  \App\Models\

     */
    public function __construct(Info $info, Type $type, Catalog $catalog, Category $category, Kalonka $kalonka, Form $form, Tip $tip)
    {
        $this->model_info = $info;
        $this->model_type = $type;
        $this->model_catalog = $catalog;
        $this->model_category = $category;
        $this->model_kalonka = $kalonka;
        $this->model_form = $form;
        $this->model_tip = $tip;


    }
    /**
     * Create a query for news.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNews($request)
    {
        $query = $this->model_info
            ->select('id', 'name_uz', 'info_uz' , 'name_ru', 'info_ru' , 'image', 'click', 'created_at')
            ->orderBy('id', 'desc');
        return $query->get();
    }
    /**
     * Store a newly created news in storage.
     *
     * @param  \App\Http\Requests\NewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        //Info::create($request->all());
        $this->model_info->name_uz = $request->name_uz;
        $this->model_info->info_uz = $request->info_uz;
        $this->model_info->name_ru = $request->name_ru;
        $this->model_info->info_ru = $request->info_ru;
        $this->model_info->image = $request->image;
        $this->model_info->save();
    }
    /**
     * update selected news.
     *
     * @return void
     */
    public function updateNews($request, $id)
    {
        $new = $this->model_info::find($id);
        $new->name_uz = $request->name_uz;
        $new->info_uz = $request->info_uz;
        $new->name_ru = $request->name_ru;
        $new->info_ru = $request->info_ru;
        $new->save();
    }
    /**
     * delete selected news.
     *
     * @return void
     */
    public function delete($new)
    {
        $new->delete();
    }


    /**
     * Create a query for Message.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcMessage()
    {
        $query = Message::select('id', 'name', 'email', 'message', 'created_at', 'bold')
            ->orderBy('id', 'desc');
        return $query->get();
    }
    /**
     * Create a query for Price Message.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function priceMessage()
    {
        $query = Price::select('id', 'name', 'address', 'phone', 'email', 'created_at')
            ->orderBy('id', 'desc');
        return $query->get();
    }

    /**
     * view for category page
     *
     * @return void
     */
    public function category($request)
    {
        $query = $this->model_category
            ->select('id', 'category_uz', 'category_ru')
            ->orderBy('id', 'asc');
        return $query->get();
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory($request)
    {
        Category::create($request->all());
    }
    /**
     * update selected category.
     *
     * @return void
     */
    public function updateCategory($request, $category)
    {
        $category->category_uz = $request->category_uz;
        $category->category_ru = $request->category_ru;
        $category->save();
    }


    /**
     * view for catalog page
     *
     * @return void
     */
    public function catalog($request)
    {
        $query = $this->model_type
            ->select('id', 'category_id', 'name_uz', 'name_ru', 'image')
            ->orderBy('id', 'asc');
        return $query->get();
    }
    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeCatalog($request)
    {
        Type::create($request->all());
    }

    /**
     * update selected catalog.
     *
     * @return void
     */
    public function updateCatalog($request, $catalog)
    {
        $catalog->category_id = $request->category_id;
        $catalog->name_uz = $request->name_uz;
        $catalog->name_ru = $request->name_ru;
        $catalog->save();
    }

    /**
     * view for Model page
     *
     * @return void
     */
    public function funcModel($request)
    {
        $query = $this->model_catalog
            ->select('id', 'type_id', 'compound_uz', 'color_uz', 'info_uz', 'compound_ru', 'color_ru', 'info_ru', 'article', 'size', 'image', 'image2', 'image3')
            ->orderBy('id', 'asc');
        return $query->get();
    }

    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeModel($request)
    {
        $image = explode( "," ,$request->image);

        $this->model_catalog->type_id = $request->type_id;
        $this->model_catalog->compound_uz = $request->compound_uz;
        $this->model_catalog->color_uz = $request->color_uz;
        $this->model_catalog->info_uz = $request->info_uz;
        $this->model_catalog->compound_ru = $request->compound_ru;
        $this->model_catalog->color_ru = $request->color_ru;
        $this->model_catalog->info_ru = $request->info_ru;
        $this->model_catalog->size = $request->size;
        $this->model_catalog->article = $request->article;
        $this->model_catalog->image = $image[0];
        $this->model_catalog->image2 = $image[1];
        $this->model_catalog->image3 = $image[2];
        $this->model_catalog->save();
    }

    /**
     * update selected Model.
     *
     * @return void
     */
    public function updateModel($request, $model)
    {

        $model->type_id = $request->type_id;
        $model->compound_uz = $request->compound_uz;
        $model->color_uz = $request->color_uz;
        $model->info_uz = $request->info_uz;
        $model->compound_ru = $request->compound_ru;
        $model->color_ru = $request->color_ru;
        $model->info_ru = $request->info_ru;
        $model->article = $request->article;
        $model->size = $request->size;
        $model->save();
    }

    /**
     * Create a query for modniy obriz.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcObriz($request)
    {
        $query = $this->model_form
            ->select('id', 'title_uz', 'info_uz' , 'title_ru', 'info_ru' , 'source', 'image', 'click', 'created_at')
            ->orderBy('id', 'desc');
        return $query->get();
    }
    /**
     * Store a newly created modnoy obriz in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeObriz($request)
    {
        Form::create($request->all());
    }

    /**
     * update selected modnoy obriz.
     *
     * @return void
     */
    public function updateObriz($request, $form)
    {

        $form->title_uz = $request->title_uz;
        $form->info_uz = $request->info_uz;
        $form->title_ru = $request->title_ru;
        $form->info_ru = $request->info_ru;
        $form->source = $request->source;
        $form->image = $request->image;
        $form->save();
    }

    /**
     * Create a query for modniy obriz.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcKalonka($request)
    {
        $query = $this->model_kalonka
            ->select('id', 'title_uz', 'info_uz' , 'title_ru', 'info_ru' , 'source', 'image', 'click', 'created_at')
            ->orderBy('id', 'desc');
        return $query->get();
    }
    /**
     * Store a newly created modnoy obriz in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeKalonka($request)
    {
        Kalonka::create($request->all());
    }

    /**
     * update selected modnoy obriz.
     *
     * @return void
     */
    public function updateKalonka($request, $kalonka)
    {

        $kalonka->title_uz = $request->title_uz;
        $kalonka->info_uz = $request->info_uz;
        $kalonka->title_ru = $request->title_ru;
        $kalonka->info_ru = $request->info_ru;
        $kalonka->source = $request->source;
        $kalonka->image = $request->image;
        $kalonka->save();
    }

    /**
     * Create a query for useful tips.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcTip($request)
    {
        $query = $this->model_tip
            ->select('id', 'title_uz', 'info_uz' , 'title_ru', 'info_ru' , 'source', 'image', 'click', 'created_at')
            ->orderBy('id', 'desc');
        return $query->get();
    }
    /**
     * Store a newly created useful tips in storage.
     *
     * @param  \App\Http\Requests\RubricRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeTip($request)
    {
        Tip::create($request->all());
    }

    /**
     * update selected useful tips.
     *
     * @return void
     */
    public function updateTip($request, $kalonka)
    {

        $kalonka->title_uz = $request->title_uz;
        $kalonka->info_uz = $request->info_uz;
        $kalonka->title_ru = $request->title_ru;
        $kalonka->info_ru = $request->info_ru;
        $kalonka->source = $request->source;
        $kalonka->image = $request->image;
        $kalonka->save();
    }
}
