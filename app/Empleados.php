<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Empleados extends Authenticatable
{

    use Notifiable;

    protected $fillable = [
        'nombre', 'email', 'password',
        'apellidos',
        'dni',
        'direccion',
        'telefono',
        'otros_telefonos',
        'imagen',
        'foto',
        'cant_horas_diarias',
        'id_cargo',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function empleadosDepartamentos()
    {
        return $this->belongsToMany(Empleados_Departamentos::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargos::class);
    }
}
