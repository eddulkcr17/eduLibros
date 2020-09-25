<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //LARAVEL ADMITIRA SOLO ESTOS CAMPOS EN  EL INGRESO DEL FORMULARIO PARA LA TABLA USER EVITANDO ATAQUES SQL
   protected $fillable = [
        'name', 'email', 'password', 'role_id','dni','sexo','direccion','telefono','fecha_nacimiento','foto','estado'
    ];

    public function rol(){
        return $this->belongsTo('App\Rol');
    }

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
}
