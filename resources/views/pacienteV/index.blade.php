@extends('layouts.app')
@section('content')
 <div class="container">
    <h1>LISTA DE PACIENTES</h1>
    <table class="table table-dark table-striped mt-4">
        <tr>
            <th   >Nro </th>
            <th   >Nombre </th>
            <th  >Dni </th>
            <th  >Domicilio </th>
            <th  >Edad</th>
            <th  >Genero </th>
            <th  >Telefono </th>
        </tr>
        <tbody>
        @forelse ($pacientes as $paciente)
                <tr>
                    <td scope="col" >{{ $loop->index + 1 }}</td>
                    <td scope="col" >{{ $paciente->nombre }}</td>
                    <td scope="col" >{{ $paciente->dni }}</td>
                    <td scope="col" >{{ $paciente->domicilio }}</td>
                    <td scope="col" >{{ $paciente->edad }}</td>
                    <td scope="col" >{{ $paciente->genero }}</td>
                    <td scope="col" >{{ $paciente->telefono }}</td>
                <td>
                <a class="btn btn-info" href="{{ route('paciente.editar', $paciente->slug) }}">Editar</a>
                <a class="btn btn-info" href="{{ route('paciente.ver', $paciente->slug) }}">Ver</a>
                <a class="btn btn-danger" href="" onclick="if(confirm('¿Eliminar {{ $paciente->nombre }} ?'))event.preventDefault();
                     document.getElementById('borrar-{{ $paciente->slug }}').submit();">Eliminar</a>
                
                <form id="borrar-{{ $paciente->slug }}" method="post"
                action="{{ route('paciente.eliminar', $paciente->slug) }}">
                @csrf
                    @method('DELETE')
                        </td>
                    </tr>
                @empty
            <p> No hay Pacientes!</p>
        @endforelse
    </tbody>
</table>
</div>
@endsection