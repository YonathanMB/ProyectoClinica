@extends('layouts.app')
@section('content')
 <div class="container">
    <h1>VISTA DE PACIENTES</h1>

    <div  class="form-group">
        <label for="" class="control-label">NOMBRE</label>
        <input type="text" class="form-control" name="nombre" value="{{ $paciente->nombre }}" readonly>
    </div>

    <div class="form-group" >
        <label for="" class="control-label">DNI</label>
        <input type="text" name="dni"  class="form-control"  value="{{ $paciente->dni }}" readonly>
    </div>

    <div class="form-group">
        <label for="" class="control-label">DOMICILIO</label>
        <input type="text" name="domicilio" class="form-control" value="{{ $paciente->domicilio }}" readonly>
    </div>

    <div  class="form-group">
        <label for="" class="control-label" >EDAD</label>
        <input type="text" name="edad" class="form-control" value="{{ $paciente->edad }}" readonly>
    </div>

    <div  class="form-group">
        <label for="" class="cotrol-label">GENERO</label>
        <input type="text" name="genero" class="form-control" value="{{ $paciente->genero }}" readonly>
    </div>

    <div class="form-group" >
        <label for="" class="control-label">TELEFONO</label>
        <input type="text" name="telefono" class="form-control" value="{{ $paciente->telefono }}" readonly>
    </div>

    <div>
    <a href="{{ route('paciente.listar') }}"> Back</a>
    </div>

 </div>
@endsection
