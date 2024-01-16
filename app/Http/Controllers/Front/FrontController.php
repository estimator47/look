<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Blog;
use App\Models\Catalog;
use App\Models\Material;
use App\Models\Message;
use App\Repositories\FrontRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    /**
     * @var FrontRepository
     */
    protected $repository;

    public function __construct(FrontRepository $repository)
    {
        $this->repository = $repository;
    }


    /** home page.  */
    public function index() {
        return view('front.index');
   }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function product() {
        return view('front.product');
    }

    /**
     * @param $material
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function products($material, Request $request) {

        $material = Material::where('material_en', $material)->first();
        $products = $this->repository->funcProducts($material, $request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("front.products-standard", ['products' => $products])->render(),
            ]);
        }

        return view('front.products', compact('products'), compact('material'));
    }

    /**
     * @param $fabric
     * @param $title
     * @param $id
     * @param Catalog $catalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singleProduct($fabric, $title, $id, Catalog $catalog) {

        $product = $catalog->find($id);

        $material = Material::where('material_en', $fabric)->first();

        $products = Catalog::where('material_id', $material->id)
            ->where('type_id', '!=', $product->type_id)
            ->with('products')->with('colors')
            ->LIMIT(4)->get();

        return view('front.single-product', compact('product'), compact('products'));
    }

    /** cotton fabric page.  */
    public function cotton() {
        return view('front.fabric-cotton');
    }
    /** silk fabric page.  */
    public function silk() {
        return view('front.fabric-silk');
    }
    /** lace fabric page.  */
    public function lace() {
        return view('front.fabric-lace');
    }
    /** other fabric page.  */
    public function other() {
        return view('front.fabric-other');
    }

    /** blog page.  */
    public function blog(Request $request) {

        $blogs = $this->repository->blog($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "front.blog-standard", ['blogs' => $blogs])->render(),
            ]);
        }

        return view('front.blog', compact('blogs'));
    }

    public function blogMore(Request $request)
    {
        $blogs = $this->repository->blogMore($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "front.blog-standard", ['blogs' => $blogs])->render(),
            ]);
        }

        //submit
        return view('front.blog', compact('blog'));
    }

    /** single blog page.  */
    public function singleBlog($id, Blog $blog) {

        $news = Blog::query()->limit(3)
                ->orderBy('click', 'desc')->get();

        $blog = $blog->find($id);
        $blog->click = $blog->click + 1;
        $blog->save();

        // dd($blog);
        return view('front.single-blog', compact('news'), compact('blog') );
    }
    /** about -us page.  */
    public function about() {
        return view('front.about-us');
    }
    /** contact page.  */
    public function contact() {
        return view('front.contact-us');
    }

    /**
     * Sending message from contact page.
     *
     * @return
     */
    public function sendingMessage(MessageRequest $request)
    {
            $lang = App::getLocale();
            if ($lang == 'en') $text = "Your message has been sent successfully.";
            else $text = 'Ваше сообщение отправлено успешно.';

            Message::create($request->all());

        return redirect(route('contact'))->with('contact-ok', $text);
    }

    /** 404 error page.  */
    public function error() {
        return view('errors.404');
    }

    /** login page.  */
    public function login() {
        return view('auth.login');
    }

    public function certificateTypes() {
        $types = CertificateType::query()->get();
        
        if ($request->ajax()) {
            return response()->json([
                'table' => view( "front.certificate-type-standard", ['types' => $types])->render(),
            ]);
        }

        return view('front.certificate-type', compact('types'));
    }

      public function getCertificates($id) {
        $certificates = CertificateFile::query()->where('certificate_type_id', $id)->orderByDesc('id')->get();
        
        if ($request->ajax()) {
            return response()->json([
                'table' => view( "front.certificate-standard", ['certificate' => $certificates])->render(),
            ]);
        }

        return view('front.certificate', compact('certificates'));
    }

}
