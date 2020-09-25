<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use Illuminate\Support\Facades\DB;

class AumentaController extends Controller
{
   
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
     public function edit($id)
    {
    

      
        $actualizar = Libro::findOrFail($id);
        return view('libros.PorcentajeAumentaLibro',compact('actualizar'));
    }

  
    public function update(Request $request, $id)
    {
        $datos = [
            'hejr_porcentaje' => 'required | max:3'
        ];
        $this->validate($request,$datos);

        $porcentaje = $request->get('hejr_porcentaje');
        $datosPorcentaje  = $porcentaje/100;

        $titulo = $request->get('hejr_titulo');
        // return $datosPorcentaje;

        $consulta = DB::update('update libros set hejr_precio_venta = (hejr_precio_venta + (hejr_precio_venta*'.$datosPorcentaje.')) WHERE id = ?',[$id]);

        $porcentajeAumentado = $datosPorcentaje*100;
        return redirect('libro')->with([
            'Mensaje' => 'Se aumenton un '.$porcentajeAumentado. ' % al libro '.$titulo.' '
        ]); 
    }

    public function destroy($id)
    {
        //
    }
}
