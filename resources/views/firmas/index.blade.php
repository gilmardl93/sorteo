@extends('layouts.layout')

@section('content')
    <div class="note note-success">
        <h3>FIRMAS DE LOS ASISTENTES</h3>
        <p> Los que se encuentran en con el texto <b>VACIO</b> no se mostraran en el reporte.</p>
        <p> En caso de retirar a una persona se debe poner <b>VACIO</b>.</p>
    </div>

    <hr>

    {!! Session::get('message') !!}

    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FACULTAD</th>
                    <th>DECANO</th>
                    <th>VER MAS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($firmas as $row)
                <tr>
                    <td>{!! $row->id !!}</td>
                    <td>{!! $row->facultad !!}</td>
                    <td>{!! $row->decano !!}</td>
                    <td><a href="{!! url('ver/'.$row->id) !!}" class="btn btn-primary">ACTUALIZAR</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

@stop