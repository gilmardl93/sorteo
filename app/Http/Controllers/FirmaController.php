<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firma;


class FirmaController extends Controller
{
    public function index()
    {
        $firmas = Firma::orderBy('id','asc')->get();
        return view('firmas.index', compact('firmas'));
    }

    public function ver($id)
    {
        $firmas = Firma::Validar($id)->get();
        return view('firmas.editar', compact('firmas'));
    }

    public function actualizar(Request $request)
    {
        Firma::Validar($request->id)->update([
            'decano' => $request->decano,
            'facultad' => $request->facultad
        ]);

        return redirect('firmas')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>INFORMACION ACTUALIZADA !!</strong> Se actualizo la información.</div>'); 
    }
}
