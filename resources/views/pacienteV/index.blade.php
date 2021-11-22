@extends('layouts.app')
@section('content')
 <div class="container">
    <h1>LISTA DE PACIENTES</h1>
    <table>
        <tr>
            <th  style="border:2px black solid; " >Nro </th>
            <th  style="border:2px black solid; " >Nombre </th>
            <th  style="border:2px black solid; ">Dni </th>
            <th  style="border:2px black solid; ">Domicilio </th>
            <th  style="border:2px black solid; ">Edad</th>
            <th  style="border:2px black solid; ">Genero </th>
            <th  style="border:2px black solid; ">Telefono </th>
        </tr>
        <tbody>
        @forelse ($pacientes as $paciente)
                <tr>
                    <td style="border:2px black solid; ">{{ $loop->index + 1 }}</td>
                    <td style="border:2px black solid; ">{{ $paciente->nombre }}</td>
                    <td style="border:2px black solid; ">{{ $paciente->dni }}</td>
                    <td style="border:2px black solid; ">{{ $paciente->domicilio }}</td>
                    <td style="border:2px black solid; ">{{ $paciente->edad }}</td>
                    <td style="border:2px black solid; ">{{ $paciente->genero }}</td>
                    <td style="border:2px black solid; ">{{ $paciente->telefono }}</td>
                <td>
                <a href="{{ route('paciente.editar', $paciente->slug) }}">Editar</a>
                <a href="{{ route('paciente.ver', $paciente->slug) }}">Ver</a>
                <a href="" onclick="if(confirm('¿Eliminar {{ $paciente->nombre }} ?'))event.preventDefault();
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