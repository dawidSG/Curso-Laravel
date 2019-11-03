<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados_Departamentos extends Model
{
    protected $fillable = [
        'id_empleado', 'id_departamento',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleados::class);
    }
    public function departamento()
    {
        return $this->belongsTo(Departamentos::class);
    }
}
