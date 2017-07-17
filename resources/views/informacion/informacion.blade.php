@extends('layouts.layout')

@section('css-style')
{!! Html::style('assets/global/plugins/bootstrap-summernote/summernote.css') !!}
@stop

@section('content')
    <div class="note note-primary">
        <h3>ACTUALIZAR INFORMACION</h3>
        <p> <h3>CONCURSO DE ADMISIÓN 2017-2</h3></p>
    </div>

    <hr>

    {!! Session::get('message') !!}

    {!! Form::open(['url' => 'actualizar-informacion', 'method' => 'POST']) !!}

    @foreach($informacion as $row)
    <input type="hidden" name="id" value="{!! $row->id !!}">
    {!! Form::textarea('informacion',$row->informacion,['id' => 'summernote_1']) !!}
    @endforeach

    {!! Form::submit('ACTUALIZAR',['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

@stop

@section('js-script')
{!! Html::script('assets/global/plugins/bootstrap-summernote/summernote.min.js') !!}
{!! Html::script('assets/pages/scripts/components-editors.min.js') !!}
@stop 