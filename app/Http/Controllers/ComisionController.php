<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comision;

class ComisionController extends Controller
{
    public function registrar1(Request $request)
    {
        $data = new Comision();
        $data->idpostulante_1       = $request->idpostulante1;
        $data->idpostulante_2       = $request->idpostulante2;
        $data->idpostulante_3       = $request->idpostulante3;
        $data->datos_1              = $request->datos1;
        $data->datos_2              = $request->datos2;
        $data->datos_3              = $request->datos3;
        $data->dni_1                = $request->dni1;
        $data->dni_2                = $request->dni2;
        $data->dni_3                = $request->dni3;
        $data->nro_inscripcion_1    = $request->nroinscripcion1;
        $data->nro_inscripcion_2    = $request->nroinscripcion2;
        $data->nro_inscripcion_3    = $request->nroinscripcion3;
        $data->cargo_1              = $request->cargo1;
        $data->cargo_2              = $request->cargo2;
        $data->cargo_3              = $request->cargo3;
        $data->examen               = "PRIMERA PRUEBA";
        $data->fecha                = "2017-08-07";
        $data->proceso              = "CONCURSO DE ADMISION 2017-2";
        $data->save();

        return redirect('/')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>SE ASIGNO POSTULANTES !!</strong> Se asigno a 3 postulantes para el dia 07 de Agosto del 2017.</div>');
    }

    public function registrar2(Request $request)
    {
        $data = new Comision();
        $data->idpostulante_1       = $request->idpostulante1;
        $data->idpostulante_2       = $request->idpostulante2;
        $data->idpostulante_3       = $request->idpostulante3;
        $data->datos_1              = $request->datos1;
        $data->datos_2              = $request->datos2;
        $data->datos_3              = $request->datos3;
        $data->dni_1                = $request->dni1;
        $data->dni_2                = $request->dni2;
        $data->dni_3                = $request->dni3;
        $data->nro_inscripcion_1    = $request->nroinscripcion1;
        $data->nro_inscripcion_2    = $request->nroinscripcion2;
        $data->nro_inscripcion_3    = $request->nroinscripcion3;
        $data->cargo_1              = $request->cargo1;
        $data->cargo_2              = $request->cargo2;
        $data->cargo_3              = $request->cargo3;
        $data->examen               = "SEGUNDA PRUEBA";
        $data->fecha                = "2017-08-09";
        $data->proceso              = "CONCURSO DE ADMISION 2017-2";
        $data->save();

        return redirect('/')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>SE ASIGNO POSTULANTES !!</strong> Se asigno a 3 postulantes para el dia 09 de Agosto del 2017.</div>');
    }
    
    public function registrar3(Request $request)
    {
        $data = new Comision();
        $data->idpostulante_1       = $request->idpostulante1;
        $data->idpostulante_2       = $request->idpostulante2;
        $data->idpostulante_3       = $request->idpostulante3;
        $data->datos_1              = $request->datos1;
        $data->datos_2              = $request->datos2;
        $data->datos_3              = $request->datos3;
        $data->dni_1                = $request->dni1;
        $data->dni_2                = $request->dni2;
        $data->dni_3                = $request->dni3;
        $data->nro_inscripcion_1    = $request->nroinscripcion1;
        $data->nro_inscripcion_2    = $request->nroinscripcion2;
        $data->nro_inscripcion_3    = $request->nroinscripcion3;
        $data->cargo_1              = $request->cargo1;
        $data->cargo_2              = $request->cargo2;
        $data->cargo_3              = $request->cargo3;
        $data->examen               = "TERCERA PRUEBA";
        $data->fecha                = "2017-08-11";
        $data->proceso              = "CONCURSO DE ADMISION 2017-2";
        $data->save();

        return redirect('/')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>SE ASIGNO POSTULANTES !!</strong> Se asigno a 3 postulantes para el dia 11 de Agosto del 2017.</div>');
    }
}
