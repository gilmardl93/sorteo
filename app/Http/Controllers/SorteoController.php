<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;
use App\Models\Decano;
use App\Models\Comision;

class SorteoController extends Controller
{
    public function index()
    {
        $sorteos = Comision::Validos()->get();
        return view('sorteo.sorteo', compact('sorteos'));
    }

    public function dia1()
    {
        $postulantes1   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        $postulantes2   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        $postulantes3   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        return view('sorteo.dia1', compact(['postulantes1','postulantes2','postulantes3']));
    }

    public function dia2()
    {
        $postulantes1   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        $postulantes2   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        $postulantes3   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        return view('sorteo.dia2', compact(['postulantes1','postulantes2','postulantes3']));
    }

    public function dia3()
    {
        $postulantes1   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        $postulantes2   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        $postulantes3   = Postulante::Validos()->orderByRaw('RANDOM()')->take(1)->get();
        return view('sorteo.dia3', compact(['postulantes1','postulantes2','postulantes3']));
    }

    public function eliminar($id)
    {
        Comision::destroy($id);

        return redirect('/')->with('message','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>SE ELIMINO A 3 ASIGNADOS !!</strong> Seleccionar nuevamente.</div>');
    }
}
