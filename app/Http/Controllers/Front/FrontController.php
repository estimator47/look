<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

use App\{
    Http\Controllers\Controller,
    Http\Requests\PriceRequest,
    Repositories\FrontRepository,
    Http\Controllers\Traits\Indexable,
    Http\Requests\MessageRequest,
    Models\Info,
    Models\Type,
    Models\Catalog,
    Models\Category,
    Models\Kalonka,
    Models\Form,
    Models\Tip
};
use Illuminate\Support\Facades\App;


class FrontController extends Controller
{

    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FrontRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'front';
    }

    /**
     * Search query.
     *
     * @param Request $request
     * @param Type|null $type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function search(Request $request)
    {
        $search = $request->input('search');
        $search = '%' . $search . '%';

        $type = Type::query()
            ->where('name_ru', 'like', $search)
            ->orWhere('name_uz', 'like', $search)
            ->first();

        if($type) {
            return redirect(route('catalog', ['id' => $type->id]));
        } else {
            return redirect(route('search_error'));
        }
    }
    /**
     *  search error page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function searchError()
    {
        return view('front.search-error');
    }

    /**
     * Catalog type page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function catalog_type($id, Category $category)
    {
        $types = $this->repository->catalog_type($id);

        $type = $category->find($id);

        return view('front.type', compact('types'), compact('type'));
    }

    /**
     * Catalog page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function catalog($id, Type $type)
    {
        $catalogs = $this->repository->catalog($id);

        $catalog = $type->find($id);

        return view('front.catalog', compact('catalogs'), compact('catalog'));
    }

    /**
     * Single blog page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleCatalog($id, Catalog $catalog)
    {

        $catalog = $catalog->find($id);
        
        return view('front.catalog-single', compact('catalog'));
    }

    //information pages

    /**
     *  payment & delivery page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function payDel()
    {
        return view('front.payment-delivery');
    }

    /**
     *  Size page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function size()
    {
        return view('front.size');
    }

    /**
     *  Fabric page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fabric()
    {
        return view('front.fabric');
    }

    /**
     *  rules for trade page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rules()
    {
        return view('front.rules');
    }


    //Wholesale pages

    /**
     * price-list page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function price()
    {
        return view('front.price-list');
    }

    /**
     * Asking price.
     *
     * @return false|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function askPrice(PriceRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return json_encode($request->validator->errors());
        } else {
            $lang = App::getLocale();
            if ($lang == 'uz') $text = "Sizning so'rovingiz jo'natildi.";
            else $text = 'Ваш запрос был отправлен.';

            $this->repository->askPrice($request);
            return redirect(route('price-list'))->with('price-ok', $text);
        }
    }

    /**
     * delivery from page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function forDel()
    {
        return view('front.fordelivery');
    }

    /**
     * online shop page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function onlineShop()
    {
        return view('front.online-shop');
    }

    //Categories

    /**
     * News for blog page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog(Request $request)
    {

        $news = Info::paginate(4);

        return view('front.blog', compact('news'));
    }


    /**
     * Single blog page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleBlog(Request $request, $id, Info $model_info)
    {

        $news = $this->repository->funcSingle($request);

        $new = $model_info->find($id);
        $new->click = $new->click + 1;
        $new->save();
        return view('front.blog-single', compact('new'), compact('news'));
    }

    /**
     *  Kalonka Stilist page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kalonkaStyle()
    {
        $kalonkas = Kalonka::paginate(6);

        return view('front.kalonka-style', compact('kalonkas'));
    }

    /**
     * Single Kalonka Stilist page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleKalonka(Request $request, $id, Kalonka $model_kalonka)
    {

        $kalonkas = $this->repository->funcStyle($request);

        $new = $model_kalonka->find($id);
        $new->click = $new->click + 1;
        $new->save();
        return view('front.kalonka-single', compact('new'), compact('kalonkas'));
    }


    /**
     *  Modniy obraz page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modniyObriz()
    {
        $forms = Form::paginate(6);

        return view('front.modniy', compact('forms'));
    }
    /**
     * Single  page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleObriz(Request $request, $id, Form $model_form)
    {

        $forms = $this->repository->funcObriz($request);

        $new = $model_form->find($id);
        $new->click = $new->click + 1;
        $new->save();
        return view('front.modniy-single', compact('new'), compact('forms'));
    }

    /**
     *  useful advice page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function usefulTips()
    {
        $tips = Tip::paginate(6);

        return view('front.advice', compact('tips'));
    }
    /**
     * Single  advice page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleTips(Request $request, $id, Tip $model_tip)
    {

        $tips = $this->repository->funcTips($request);

        $new = $model_tip->find($id);
        $new->click = $new->click + 1;
        $new->save();
        return view('front.advice-single', compact('new'), compact('tips'));
    }

    /**
     *  sale page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sale()
    {
        return view('front.sale');
    }

    /**
     * Contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * Sending message from contact page.
     *
     * @return false|\Illuminate\Contracts\Support\Renderable|string
     */
    public function message(MessageRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return json_encode($request->validator->errors());
        } else {
            $lang = App::getLocale();
            if ($lang == 'uz') $text = "Sizning xabaringiz jo'natildi.";
            else $text = 'Ваше сообщение отправлено.';

            $this->repository->message($request);
            return redirect(route('contact'))->with('contact-ok', $text);
        }
    }

    /**
     * errors page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('errors.403');
    }

    /**
     * errors page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('errors.403');
    }

    /**
     *  yandex url.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function yandex()
    {
        return view('front.yandex_901f6214fc1ea6aa');
    }

    /**
     * login page for Admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loginAdmin()
    {
        return view('auth.login');
    }

}
