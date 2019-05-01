<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Persona as Authenticatable;

class Persona extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'aPaterno', 'aMaterno','nombre','domicilio','nExt',
        'nInt','colonia','ciudad','estado','telefono','edad','sexo',
        'nacionalidad','estadoCivil',
    ];

}
