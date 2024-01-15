<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CatalogRequest;
use App\Models\Catalog;
use App\Models\ColorImage;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateFileController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $catalogs = Catalog::query()
            ->with('products')
            ->with('colors')
            ->paginate(15);

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "back.catalog-standard", compact('catalogs'))->render(),
            ]);
        }

        //submit
        return view( 'back.catalog', compact('catalogs'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('back.catalogs.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function productImage(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalName();
        Storage::disk('public')->putFileAs('products', $image, $imageName);
        $image = 'products/'.$imageName;

        return response()->json(['success' => true, 'image' => $image]);
    }

    /**
     * @param CatalogRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CatalogRequest $request)
    {
        $catalog = new Catalog();
        $catalog->material_id = $request->material_id;
        $catalog->type_id = $request->type_id;
        $catalog->title_en = $request->title_en;
        $catalog->info_en = $request->info_en;
        $catalog->description_en = $request->description_en;
        $catalog->title_ru = $request->title_ru;
        $catalog->info_ru = $request->info_ru;
        $catalog->description_ru = $request->description_ru;
        $catalog->size = $request->size;
        if ($catalog->save()){

            $img = explode( "," , $request->image);
            for($i = 0; $i<count($img); $i++) {
                $image = new ProductImage();
                $image->catalog_id = $catalog->id;
                $image->path =$img[$i];
                $image->save();
            }

            $img_color = explode( "," , $request->color_img);
            $name_color_en = explode( "," , $request->color_en);
            $name_color_ru = explode( "," , $request->color_ru);

            for($i = 0; $i<count($img_color); $i++)
                for($j = 0; $j<count($name_color_en); $j++)
                    for($k = 0; $k<count($name_color_ru); $k++)
                        if (!ColorImage::where('path', $img_color[$i])->exists() &&
                            !ColorImage::where('catalog_id', $catalog->id)->where('color_en', $name_color_en[$j])->exists() &&
                            !ColorImage::where('catalog_id', $catalog->id)->where('color_ru', $name_color_ru[$k])->exists()){
                            $image = new ColorImage();
                            $image->catalog_id = $catalog->id;
                            $image->path = $img_color[$i];
                            $image->color_en = $name_color_en[$j];
                            $image->color_ru = $name_color_ru[$k];
                            $image->save();
                        }
        };

        return redirect(route('catalog'))->with('catalog-ok', "Продукт добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalog $catalog)
    {
        return view('back.catalogs.edit', compact('catalog'));
    }

    /**
     * @param Request $request
     * @param Catalog $catalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Catalog $catalog)
    {
        $data = $request->validate([
            'material_id' => 'bail|required',
            'type_id' => 'bail|required',
            'title_en' => 'bail|required',
            'info_en' => 'bail|required',
            'description_en' => 'bail|required',
            'title_ru' => 'bail|required',
            'info_ru' => 'bail|required',
            'description_ru' => 'bail|required',
            'size' => 'bail|required',
        ]);

        $catalog->material_id = $data['material_id'];
        $catalog->type_id = $data['type_id'];
        $catalog->title_en = $data['title_en'];
        $catalog->info_en = $data['info_en'];
        $catalog->description_en = $data['description_en'];
        $catalog->title_ru = $data['title_ru'];
        $catalog->info_ru = $data['info_ru'];
        $catalog->description_ru = $data['description_ru'];
        $catalog->size = $data['size'];
        $catalog->save();

        return redirect(route('catalog'))->with('catalog-ok', 'Продукт изменено..');
    }

//    public function destroy(Request $request, Catalog $catalog)
//    {
//        $catalog->delete();
//
//        return $this->index($request);
//    }

    /**
     * @param Request $request
     * @param Catalog $catalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function removeProduct(Request $request)
    {

        $catalog = Catalog::where('id', $request->id)->first();

            $products = ProductImage::where('catalog_id', $catalog->id)->get();
            foreach ($products as $product) {
                if (Storage::exists('public/' . $product->path)) {
                    Storage::delete('public/' . $product->path);

                    $colors = ColorImage::where('catalog_id', $catalog->id)->get();
                    foreach ($colors as $color) {
                        if (Storage::exists('public/' . $color->path)) {
                            Storage::delete('public/' . $color->path);
                            $catalog->delete();
                        }
                    }
                }
            }


        return $this->index($request);
    }

}
