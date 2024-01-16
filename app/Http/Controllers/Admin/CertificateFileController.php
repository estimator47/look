<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CertificateFile;
use App\Models\CertificateType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateFileController extends Controller
{
    public function index(Request $request)
    {
        $files = CertificateFile::query()->orderByDesc('id')->paginate();

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.certificate-file-standard", compact('files'))->render(),
            ]);
        }

        return view('back.certificate-file', compact('files'));
    }

    public function create()
    {
        $types = CertificateType::query()->where('status', 'active')->get();
        return view('back.CertificateFile.create', compact('types'));
    }


    public function uploadFile(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalName();
        Storage::disk('public')->putFileAs('certificates', $image, $imageName);
        $image = 'certificates/' . $imageName;

        return response()->json(['success' => true, 'image' => $image]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'certificate_type_id' => 'required',
            'image' => 'required'
        ]);

        $file = new CertificateFile();
        $file->certificate_type_id = $request->certificate_type_id;
        $file->file = $request->image;
        $file->save();

        return redirect(route('certificate-file'))->with('catalog-ok', "Сертификат добавлен..");
    }

    public function removeCertificate(Request $request)
    {
        $file = CertificateFile::where('id', $request->id)->first();
        if (Storage::exists('public/' . $file->file)) {
            Storage::delete('public/' . $file->file);
        }
        $file->delete();

        return redirect(route('certificate-file'))->with('catalog-ok', "Сертификат удален...");
    }

}
