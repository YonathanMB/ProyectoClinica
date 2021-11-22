<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    #use HasFactory;
    protected $fillable = ['nombre','slug','dni','domicilio','edad','genero','telefono'];
    public function getRouteKeyName()
    {
       return 'slug';
    }
}
