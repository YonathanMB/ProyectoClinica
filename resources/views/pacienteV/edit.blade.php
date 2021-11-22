@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>EDITAR PACIENTE</h1>
    <form action="{{ route('paciente.actualizar', $paciente->slug) }}" method="post">
 @csrf
 @method('patch')

        <div class="form-group">
            <label for="" class="control-label">NOMBRE</label>
            <input type="text" name="nombre" class="form-control" value="{{ $paciente->nombre }}">
        </div>

        <div class="form-group">
            <label for="" class="control-label">DNI</label>
            <input type="text" name="dni" class="form-control" value="{{ $paciente->dni }}">
        </div>

        <div class="form-group">
            <label for="" class="control-label">DOMICILIO</label>
            <input type="text" name="domicilio" class="form-control" value="{{ $paciente->domicilio }}">
        </div>

        <div class="form-group">
            <label for="" class="control-label">EDAD</label>
            <input type="text" name="edad"  class="form-control" value="{{ $paciente->edad }}">
        </div>

        <div class="form-group">
            <label class="control-label" for="">GENERO</label>
            <input type="text" name="genero" class="form-control" value="{{ $paciente->genero }}">
        </div>

        <div class="form-group">
            <label for="" class="control-label">TELEFONO</label>
            <input type="text" name="telefono" class="form-control" value="{{ $paciente->telefono }}">
        </div>

        <div class="col-auto" style="margin-top: 24px;">
        <input type="submit"  lass="btn btn-primary mb-3" value="Update">
        </div>
    </div>
 </div>
@endsection