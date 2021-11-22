@extends('layouts.app')
@section('content')
 <div class="container">
        <h1>CREAR NUEVO PACIENTE</h1>
        <form action="{{ route('paciente.guardar') }}" method="post">
        @csrf
            <div  class="form-group">
                <label for="" class="control-label">NOMBRE</label>
                <div>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="" class="control-label">DNI</label>
                <input type="text"   class="form-control"  name="dni" value="{{ old('dni') }}">
            </div>


            <div  class="form-group">
                <label for="" class="control-label" >DOMICILIO</label>
                <input type="text" name="domicilio"  class="form-control" value="{{ old('domicilio') }}">
            </div>

            <div class="form-group">
                <label for="" class="control-label">EDAD</label>
                <input type="text" name="edad"  class="form-control" value="{{ old('edad') }}">
            </div>

            <div class="form-group">
                <label for="" class="control-label">GENERO</label>
                <input type="text" class="form-control" name="genero" value="{{ old('genero') }}">
            </div>

            <div class="form-group">
                <label for="" class="control-label">TELEFONO</label>
                <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
            </div>

            <div class="col-auto"><br>
            <input type="submit" class="btn btn-primary mb-3" value="Submit">
            </div>
 </div>
@endsection