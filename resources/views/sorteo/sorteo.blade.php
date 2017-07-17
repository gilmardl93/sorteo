@extends('layouts.layout')

@section('content')
    <div class="note note-success">
        <h3>SORTEO DE COMISIÓN DE POSTULANTES</h3>
        <p> Aquí se realizara el sorteo de los postulantes y se escoguera a 3 postulantes al azar que hayan terminado todo su proceso.</p>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="{!! url('dia1') !!}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349">07/08/2017</span>
                </div>
                <div class="desc"> DIA 1 </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 yellow" href="{!! url('dia2') !!}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349">09/08/2017</span>
                </div>
                <div class="desc"> DIA 2 </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="{!! url('dia3') !!}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349">11/08/2017</span>
                </div>
                <div class="desc"> DIA 3 </div>
            </div>
            </a>
        </div>
    </div>
    
    {!! Session::get('message') !!}

    @foreach($sorteos as $row)
    @if($row->examen == "PRIMERA PRUEBA")
    <div class="note note-success">
        <h4><b>SE ASIGNO POSTULANTES PARA LA PRIMERA PRUEBA</b></h4>
        <a href="{!! url('eliminar-asignados/'.$row->id) !!}" class="btn btn-danger">ELIMINAR</a>
    </div>
    @endif
    @if($row->examen == "SEGUNDA PRUEBA")
    <div class="note note-success">
        <h4><b>SE ASIGNO POSTULANTES PARA LA SEGUNDA PRUEBA</b></h4>
        <a href="{!! url('eliminar-asignados/'.$row->id) !!}" class="btn btn-danger">ELIMINAR</a>
    </div>
    @endif
    @if($row->examen == "TERCERA PRUEBA")
    <div class="note note-success">
        <h4><b>SE ASIGNO POSTULANTES PARA LA TERCERA PRUEBA</b></h4>
        <a href="{!! url('eliminar-asignados/'.$row->id) !!}" class="btn btn-danger">ELIMINAR</a>
    </div>
    @endif
    @endforeach

@endsection
