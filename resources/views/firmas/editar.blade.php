@extends('layouts.layout')

@section('content')
    <div class="note note-success">
        <h3>FIRMAS DE LOS ASISTENTES</h3>
        <p> Los que se encuentran en con el texto <b>VACIO</b> no se mostraran en el reporte.</p>
        <p> En caso de retirar a una persona se debe poner <b>VACIO</b>.</p>
    </div>

    <hr>
    {!! Form::open(['url' => 'actualizar-firma', 'method' => 'POST']) !!}
    @foreach($firmas as $row)
    <input type="hidden" name="id" value="{!! $row->id !!}">
    <div class="row">
        <div class="col-md-6">
        <label><b>FACULTAD</b></label>
        {!! Form::text('facultad',$row->facultad,['class' => 'form-control']) !!}
        </div>
        <div class="col-md-6">
        <label><b>DECANO</b></label>
        {!! Form::text('decano',$row->decano,['class' => 'form-control']) !!}
        </div>
    </div>
    @endforeach
    <br>
    <div class="row">
        <div class="col-md-12">
        {!! Form::submit('ACTUALIZAR',['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop