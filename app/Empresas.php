<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable = [
        'nombre', 
        'razon_social', 
        'logo', 
        'pin', 
        'direccion', 
        'localidad', 
        'provincia', 
        'CP', 
        'telefonos', 
        'email',
    ];

    public function departamentos()
    {
        return $this->hasMany(Departamentos::class);
    }
}
