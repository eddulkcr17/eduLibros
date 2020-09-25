<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
	//LARAVEL ADMITIRA SOLO ESTOS CAMPOS EN  EL INGRESO DEL FORMULARIO PARA LA TABLA AUTOR EVITANDO ATAQUES SQL
     protected $fillable= ['hejr_nombres', 'hejr_apellidos','hejr_tipo_dni','hejr_dni','hejr_sexo','hejr_fecha_autor','hejr_email','hejr_estado'];
}
