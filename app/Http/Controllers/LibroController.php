<?php

namespace App\Http\Controllers;


use App\Editorial;
use App\Autor;
use App\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function index()
    {
        $libro = Libro::all();
        $leer = $libro;

        $autor = Autor::all();
        $autores = $autor;

        $editorial = Editorial::all();
        $editoriales = $editorial;
        return view('libros.index',compact('leer','autores','editoriales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
      $autor = Autor::all();
        $autores = $autor;

        $editorial = Editorial::all();
        $editoriales = $editorial;
        return view('libros.create',compact('autores','editoriales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = [
            'autor_id' => 'required | ',
            'editorial_id' => 'required',
            'hejr_ISBN' => 'required | unique:libros',
            'hejr_titulo' => 'required | min:5 | max:20 | string',
            'hejr_anio' => 'required | min: 4 | max:4| ',
            'hejr_precio_venta' => 'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'hejr_otros_autores' => 'max:50|regex:/(^[A-Za-z0-9-, ]+$)+/'

        ];
      
      $this->validate($request,$datos);
        $datosLibro=request()->except('_token');

          $datosLibro['hejr_titulo'] = strtoupper($request->get('hejr_titulo'));
          $datosLibro['hejr_otros_autores'] = strtoupper($request->get('hejr_otros_autores'));

        
         
        Libro::insert($datosLibro);
       
        return redirect('libro')->with([
            'Mensaje' => 'Libro Agregado'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $autor = Autor::all();
        $autores = $autor;

        $editorial = Editorial::all();
        $editoriales = $editorial;

        $actualizar = Libro::findOrFail($id);
        return view('libros.edit',compact('actualizar','autores','editoriales'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
       
        $datos = [
            'autor_id' => 'required | ',
            'editorial_id' => 'required',
            'hejr_ISBN' => 'required ',
            'hejr_titulo' => 'required | min:5 | max:20 | regex:/^[\pL\s\-]+$/u  |',
            'hejr_anio' => 'required | min: 4| max:4| alpha_num',
            'hejr_precio_venta' => 'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'hejr_otros_autores' => 'max:50|regex:/(^[A-Za-z0-9-, ]+$)+/',
            'hejr_estado' => 'required'

        ];
      
      $this->validate($request,$datos);


       $datosLibro = request()->except('_token','_method'); 
       $datosLibro['hejr_titulo'] = strtoupper($request->get('hejr_titulo'));
       $datosLibro['hejr_otros_autores'] = strtoupper($request->get('hejr_otros_autores'));
        
       Libro::whereId($id)->update($datosLibro);
       
       return redirect("libro")->with([
        'Mensaje' => 'Libro actualizado'
       ]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libro::whereId($id)->delete();
       
        return redirect('/libro')->with([
        'Mensaje' => 'Libro Eliminado',
         ]);
    }
}
