@extends('layouts.layout')

@section('content')
    <div class="note note-primary">
        <h3>REPORTE DE ACTA DEL SORTEO DE LA COMISIÓN DE POSTULANTES</h3>
        <p> <h3>CONCURSO DE ADMISIÓN 2017-2</h3></p>
    </div>

    <hr>

    <iframe src="{!! route('actaPDF') !!}" width="900" height="640"></iframe>
@endsection


