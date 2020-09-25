<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PorcentajeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function aumentar(Request $request)
    {
        $datos = [
            'hejr_porcentaje' => 'required| max:3 |'
        ];
        $this->validate($request,$datos);

        $porcentaje = $request->get('hejr_porcentaje');
        $datosPorcentaje  = $porcentaje/100;
        // return $datosPorcentaje;

        $consulta = DB::update('update libros set hejr_precio_venta = (hejr_precio_venta + (hejr_precio_venta*'.$datosPorcentaje.')) ');

        $porcentajeAumentado = $datosPorcentaje*100;
        return redirect('libro')->with([
            'Mensaje' => 'Se aumenton un '.$porcentajeAumentado. ' % a todos los libros'
        ]); 
    }

    public function disminuir(Request $request)
    {
     
        $datos = [
            'hejr_porcentaje' => 'required'
        ];
        $this->validate($request,$datos);

        $porcentaje = $request->get('hejr_porcentaje');
        $datosPorcentaje  = $porcentaje/100;
     

        $consulta = DB::update('update libros set hejr_precio_venta = (hejr_precio_venta - (hejr_precio_venta*'.$datosPorcentaje.')) ');

        $porcentajeDisminuido = $datosPorcentaje*100;
        return redirect('libro')->with([
            'Mensaje' => 'Se disminuyo un '.$porcentajeDisminuido. ' % a todos los libros'
        ]); 
    }

    public function edit(Request $request, $id){
       return "Galleta".$id; 
    }

  

 
  
}
