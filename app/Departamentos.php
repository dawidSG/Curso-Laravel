<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $fillable = [
        'nombre', 'id_empresa',
    ];

    public function empleadosDepartamentos()
    {
        return $this->hasMany(Empleados_Departamentos::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresas::class);
    }
}
