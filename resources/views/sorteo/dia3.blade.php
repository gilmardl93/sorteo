@extends('layouts.layout')

@section('css-style')
{!! Html::style('assets/global/plugins/ladda/ladda-themeless.min.css') !!}
@stop

@section('content')
    <div class="note note-success">
        <h3>SORTEO DE COMISIÓN DE POSTULANTES</h3>
        <p> Asignación de postulantes para el dia Viernes 11 de Agosto del 2017.</p>
    </div>

    <a data-loading-text="Seleccionando..." id="actualizar" class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-left">
        <span class="ladda-label">SELECCIONAR POSTULANTES AL AZAR</span>
    </a>
    <a href="{!! url('/') !!}" class="btn btn-danger">ATRAS</a>

    <hr>

    {!! Form::open(['url' => 'registrar-dia3','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-4">
        @foreach($postulantes1 as $row1)
        {!! Form::label('POSTULANTE 1 - PRESIDENTE') !!}
        {!! Form::text('datos',$row1->datos,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="datos1" value="{!! $row1->datos !!}">
        <input type="hidden" name="cargo1" value="PRESIDENTE">
        <input type="hidden" name="idpostulante1" value="{!! $row1->id !!}">
        @endforeach
        </div>
        <div class="col-md-4">
        @foreach($postulantes2 as $row2)
        {!! Form::label('POSTULANTE 2 - SUPLENTE 1') !!}
        {!! Form::text('datos',$row2->datos,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="datos2" value="{!! $row2->datos !!}">
        <input type="hidden" name="cargo2" value="SUPLENTE 1">
        <input type="hidden" name="idpostulante2" value="{!! $row2->id !!}">
        @endforeach
        </div>
        <div class="col-md-4">
        @foreach($postulantes3 as $row3)
        {!! Form::label('POSTULANTE 3 - SUPLENTE 3') !!}
        {!! Form::text('datos',$row3->datos,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="datos3" value="{!! $row3->datos !!}">
        <input type="hidden" name="cargo3" value="SUPLENTE 2">
        <input type="hidden" name="idpostulante3" value="{!! $row3->id !!}">
        @endforeach
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
        @foreach($postulantes1 as $row1)
        {!! Form::label('DNI') !!}
        {!! Form::text('dni1',$row1->numero_identificacion,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="dni1" value="{!! $row1->numero_identificacion !!}">
        @endforeach
        </div>
        <div class="col-md-4">
        @foreach($postulantes2 as $row2)
        {!! Form::label('DNI') !!}
        {!! Form::text('dni2',$row2->numero_identificacion,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="dni2" value="{!! $row2->numero_identificacion !!}">
        @endforeach
        </div>
        <div class="col-md-4">
        @foreach($postulantes3 as $row3)
        {!! Form::label('DNI') !!}
        {!! Form::text('dni3',$row3->numero_identificacion,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="dni3" value="{!! $row3->numero_identificacion !!}">
        @endforeach
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
        @foreach($postulantes1 as $row1)
        {!! Form::label('N° DE INSCRIPCION') !!}
        {!! Form::text('nroinscripcion1',$row1->codigo,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="nroinscripcion1" value="{!! $row1->codigo !!}">
        @endforeach
        </div>
        <div class="col-md-4">
        @foreach($postulantes2 as $row2)
        {!! Form::label('N° DE INSCRIPCION') !!}
        {!! Form::text('nroinscripcion2',$row2->codigo,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="nroinscripcion2" value="{!! $row2->codigo !!}">
        @endforeach
        </div>
        <div class="col-md-4">
        @foreach($postulantes3 as $row3)
        {!! Form::label('N° DE INSCRIPCION') !!}
        {!! Form::text('nroinscripcion3',$row3->codigo,['disabled' => 'true', 'class' => 'form-control']) !!}
        <input type="hidden" name="nroinscripcion3" value="{!! $row3->codigo !!}">
        @endforeach
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
        {!! Form::submit('GUARDAR',['class' => 'btn btn-success']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@endsection

@section('js-script')
{!! Html::script('assets/global/plugins/ladda/spin.min.js') !!}
{!! Html::script('assets/global/plugins/ladda/ladda.min.js') !!}
{!! Html::script('assets/pages/scripts/ui-buttons.min.js') !!}
<script>
    $(function(){
        $("#actualizar").on("click", function(){
            setTimeout(function(){ window.location="dia3"; },2500);
        });
    });
</script>
@stop