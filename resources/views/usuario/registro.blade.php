@extends('plantillas.principal')

@section('titulo') Registro @stop
@section('content')
@include('alertas.request')
<div class="container">

  {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
    @include('usuario.formulario')
    <div class="form-group">
      {!!Form::label('Repita la contrasena:')!!}
      {!!Form::password('password2',['class'=>'form-control','placeholder'=>'Escribe tu contrasenia de nuevo.'])!!}
    </div>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
</div>
@stop
