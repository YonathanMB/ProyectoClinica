<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return redirect('/paciente/listar');
});
Route::get('/paciente', 'App\Http\Controllers\TestController@crearPaciente')->name('paciente.agregar');
Route::post('/paciente', 'App\Http\Controllers\TestController@registrarPaciente')->name('paciente.guardar');
Route::get('/paciente/listar', 'App\Http\Controllers\TestController@listarPacientes')->name('paciente.listar');
Route::get('/paciente/editar/{paciente}', 'App\Http\Controllers\TestController@formularioEditarPaciente')->name('paciente.editar');
Route::patch('/paciente/editar/{paciente}', 'App\Http\Controllers\TestController@ActualizarPaciente')->name('paciente.actualizar');
Route::get('/paciente/{paciente}', 'App\Http\Controllers\TestController@VerPaciente')->name('paciente.ver');
Route::delete('/paciente/{paciente}', 'App\Http\Controllers\TestController@EliminarPaciente')->name('paciente.eliminar');