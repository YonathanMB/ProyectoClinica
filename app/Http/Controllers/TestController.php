<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TestController extends Controller
{
    public function crearPaciente()
    {
    return view('pacienteV.create');
    }
    public function registrarPaciente(Request $request)
    {
    $reglas = [
        'nombre' => 'required',
        'dni' => 'required',
        'domicilio' => 'required',
        'edad' => 'required',
        'genero' => 'required',
        'telefono' => 'required'
    ];
    $mensajeDeError = [
    'required' => 'Ingreso de datos erróneo'
    ];
    $this->validate($request, $reglas, $mensajeDeError);
    paciente::create([
        'nombre' => $request->nombre,
        'slug' => Str::slug($request->nombre),
        'dni' => $request->dni,
        'domicilio' => $request->domicilio,
        'edad' => $request->edad,
        'genero' => $request->genero,
        'telefono' => $request->telefono
    ]);
    $this->mensaje('message','Paciente creado correctamente!');
    return redirect()->back();
    }
    public function listarPacientes()
    {
        $pacientes = paciente::toBase()->get();
        return view('pacienteV.index',compact('pacientes'));
    }
    public function formularioEditarPaciente(paciente $paciente)
    {
        echo "Formulario De Edicion";
        return view('pacienteV.edit',compact('paciente'));
    }
    public function ActualizarPaciente(Request $request, paciente $paciente)
    {
        echo "FORMULARIO PARA EDITAR PACIENTE";
        $reglas = [
        'nombre' => 'required',
        'dni' => 'required',
        'domicilio' => 'required',
        'edad' => 'required',
        'genero' => 'required',
        'telefono' => 'required'
        ];
    $mensajeDeError = [
    'required' => 'Ingreso de datos erróneo'
    ];
    $this->validate($request, $reglas, $mensajeDeError);
    $paciente->update([
        'nombre' => $request->nombre,
        'dni' => $request->dni,
        'domicilio' => $request->domicilio,
        'edad' => $request->edad,
        'genero' => $request->genero,
        'telefono' => $request->telefono,
    
    
        ]);
        $this->mensaje('message','Paciente Actualizado Correctamente!');
        return redirect()->back();
    }

    public function VerPaciente(paciente $paciente)
    {
    return view('pacienteV.view',compact('paciente'));
    }

    public function EliminarPaciente(paciente $paciente)
    {
        $paciente->delete();
        $this->mensaje('message','Paciente Eliminado Correctamente');
        return redirect()->back();
    }
    public function mensaje(string $nombre = null, string $mensaje = null)
    {
        return session()->flash($nombre,$mensaje);
    }
}
