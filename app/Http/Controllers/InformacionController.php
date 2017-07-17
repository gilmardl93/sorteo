<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class InformacionController extends Controller
{
    public function index()
    {
        $informacion = Informacion::all();
        return view('informacion.informacion', compact('informacion'));
    }

    public function actualizar(Request $request)
    {

        Informacion::where('id',$request->id)->update(['informacion' => $request->informacion]);

        return redirect('informacion')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>INFORMACION ACTUALIZADA !!</strong> Se actualizo la información.</div>'); 
    }
}
