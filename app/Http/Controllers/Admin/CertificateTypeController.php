<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CertificateType;
use Illuminate\Http\Request;

class CertificateTypeController extends Controller
{
    public function index(Request $request)
    {
        $types = CertificateType::query()->get();

        if ($request->ajax()) {
            return response()->json([
                'table' => view("back.certificate-type-standard", compact('types'))->render(),
            ]);
        }

        return view('back.certificate-type', compact('types'));
    }


    public function create()
    {
        return view('back.certificateTypes.create');
    }


    public function store(Request $request)
    {
        $type = new CertificateType();
        $type->name = $request->name;
        $type->save();

        return redirect(route('certificate-type'))->with('type-ok', "Тип сертификата добавлен..");
    }


    public function edit(CertificateType $certificate_type)
    {
        $type = $certificate_type;
        return view('back.certificateTypes.edit', compact('type'));
    }


    public function update(Request $request, CertificateType $certificate_type)
    {
        $certificate_type->name = $request->name;
        $certificate_type->save();

        return redirect(route('certificate-type'))->with('type-ok', 'Тип сертификата было изменено..');
    }

    public function destroy(Request $request)
    {
        $certificate_type = CertificateType::query()->where('id', $request->id)->first();
        $certificate_type->delete();

        return $this->index($request);
    }

}
