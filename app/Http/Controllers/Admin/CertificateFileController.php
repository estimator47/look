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
    public function index(Request $request)
    {
        $files = CertificateFile::query()->orderByDesc('id')->paginate();

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "back.certificate-file-standard", compact('files'))->render(),
            ]);
        }
        
        return view( 'back.certificate-file', compact('files'));
    }

    public function create()
    {
        return view('back.certificate-files.create');
    }


    public function uploadFile(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalName();
        Storage::disk('public')->putFileAs('certificates', $image, $imageName);
        $image = 'products/'.$imageName;

        return response()->json(['success' => true, 'image' => $image]);
    }

    public function store(Request $request)
    {
        $file = new CertificateFile();
        $file->certificate_type_id = $request->certificate_type_id;
        $file->file = $request->file;
        $file->save();

        return redirect(route('certificate-file'))->with('catalog-ok', "Сертификат добавлен..");
    }

    public function removeProduct(Request $request)
    {
        $file = CertificateFile::where('id', $request->id)->first();
        if (Storage::exists('public/' . $file->file)) {
            Storage::delete('public/' . $file->file);
                }
         $file->delete();
        return $this->index($request);
    }

}
