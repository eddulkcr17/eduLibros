<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
	//LARAVEL ADMITIRA SOLO ESTOS CAMPOS EN  EL INGRESO DEL FORMULARIO PARA LA TABLA LIBRO EVITANDO ATAQUES SQL
    protected $fillable=['autor_id','editorial_id','hejr_ISBN','hejr_titulo','hejr_anio','hejr_precio_venta','hejr_otros_autores','hejr_estado'];

    //RELACION  DE UNO A MUCHOS

    public function autor(){
        return $this->belongsTo('App\Autor');
    }
    //RELACION  DE UNO A MUCHOS

    public function editorial(){
    	return $this->belongsTo('App\Editorial');
    }

}
