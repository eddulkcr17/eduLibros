<?php

namespace App\Http\Controllers;

use App\Editorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $editorial = Editorial::all();
        $leer = $editorial;
        return view('editoriales.index',compact('leer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editoriales.create');
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
            'hejr_nombre' => 'required | min:3 | max: 30 | unique:editorials',
            'hejr_email' => 'required | email | min:5 | max:40 | unique:editorials'
        ];
      
      $this->validate($request,$datos);
        $datosEditorial=request()->except('_token');

        $datosEditorial['hejr_nombre'] = strtoupper($request->get('hejr_nombre'));
        $datosEditorial['hejr_email'] = strtoupper($request->get('hejr_email'));

        
         
        Editorial::insert($datosEditorial);
       
        return redirect('/editorial')->with([
            'Mensaje' => 'Editorial Agregada'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actualizar =  Editorial::findOrFail($id);
        return view('editoriales.edit',compact('actualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datos = [
            'hejr_nombre' => 'required | min:3 | max:30',
            'hejr_email' => 'required | email | max:40',
            'hejr_estado' => 'required'
        ];
      
      $this->validate($request,$datos);


       $datosEditorial = request()->except('_token','_method');

        $datosEditorial['hejr_nombre'] = strtoupper($request->get('hejr_nombre'));
        $datosEditorial['hejr_email'] = strtoupper($request->get('hejr_email'));
        
       Editorial::whereId($id)->update($datosEditorial);
       
       return redirect("editorial")->with([
        'Mensaje' => 'Editorial actualizada'
       ]);    
   }

   
    public function destroy($id)
    {


     $libro = DB::table('libros')
     ->join('Editorials','libros.editorial_id','=','Editorials.id')
   
      ->select('Editorials.hejr_nombre','Editorials.id as id de la Editorial','libros.editorial_id','libros.hejr_titulo')
      
        ->where('libros.editorial_id','=',$id)
        ->get();

       

        if(count($libro) <= 0){
          
             Editorial::whereId($id)->delete();
       
             return redirect('/editorial')->with([
             'Mensaje' => 'Editorial Eliminada',
            ]);
      
        }
        else {
            $recuperar = Editorial::findOrFail($id);
             $editorial = $recuperar['hejr_nombre'];
             return redirect('/editorial')->with([
            'Mensaje' => 'No se puede eliminar la editorial. Elimine  los libros que esten asociados a la  editorial '.$editorial,
             ]);
        }
         


       
    }
}
