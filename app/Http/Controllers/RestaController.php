<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use Illuminate\Support\Facades\DB;

class RestaController extends Controller
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        $actualizar = Libro::findOrFail($id);
        return view('libros.PorcentajeRestaLibro',compact('actualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = [
            'hejr_porcentaje' => 'required'
        ];
        $this->validate($request,$datos);

        $porcentaje = $request->get('hejr_porcentaje');
        $datosPorcentaje  = $porcentaje/100;

        $titulo = $request->get('hejr_titulo');
        // return $datosPorcentaje;

        $consulta = DB::update('update libros set hejr_precio_venta = (hejr_precio_venta - (hejr_precio_venta*'.$datosPorcentaje.')) WHERE id = ?',[$id]);

        $porcentajeAumentado = $datosPorcentaje*100;
        return redirect('libro')->with([
            'Mensaje' => 'Se disminuyo un '.$porcentajeAumentado. ' % al libro '.$titulo.' '
        ]); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
