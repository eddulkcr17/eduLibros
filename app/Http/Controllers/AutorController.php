<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutorController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $autor = Autor::all();
        $leer = $autor;
        return view('autores.index',compact('leer'));
    }

      public function create()
    {
         return view('autores.create');
    }
    
    public function store(Request $request)
    {
    $datos = [
            'hejr_nombres' => 'required | min:5 | max:30 | regex:/(?!.* $)[A-Z][a-z ]+/',
            'hejr_apellidos' => 'required |min:5 | max:30 | regex:/(?!.* $)[A-Z][a-z ]+/',
            'hejr_tipo_dni' => 'required ',
            'hejr_dni' => 'required | alpha_num | max:15 | min:10 | unique:autors',
            'hejr_sexo' => 'required|',
            'hejr_fecha_autor' => 'required | date',
            'hejr_email' => 'required | email | min:5 | max:40 | string | unique:autors'
        ];
      
      $this->validate($request,$datos);
        $datosAutor=request()->except('_token');
         $datosAutor['hejr_nombres'] = strtoupper($request->get('hejr_nombres'));
         $datosAutor['hejr_apellidos'] = strtoupper($request->get('hejr_apellidos'));
         $datosAutor['hejr_email'] = strtoupper($request->get('hejr_email'));
        
         
        Autor::insert($datosAutor);
       
        return redirect('/autor')->with([
            'Mensaje' => 'Autor Agregado'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
      
       $actualizar =  Autor::findOrFail($id);
        return view('autores.edit',compact('actualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        
       
     $datos = [
            'hejr_nombres' => 'required | min:5 | max:30 | alpha',
            'hejr_apellidos' => 'required |min:5 | max:30 | alpha',
            'hejr_tipo_dni' => 'required ',
            'hejr_dni' => 'required | alpha_num | max:15 | min:10 ',
            'hejr_sexo' => 'required|',
            'hejr_fecha_autor' => 'required | date',
            'hejr_email' => 'required | email | min:5 | max:40 | string ',
            'hejr_estado' => 'required'
        ];
      
      $this->validate($request,$datos);


       $datosAutor = request()->except('_token','_method'); 
       $datosAutor['hejr_nombres'] = strtoupper($request->get('hejr_nombres'));
       $datosAutor['hejr_apellidos'] = strtoupper($request->get('hejr_apellidos'));
       $datosAutor['hejr_email'] = strtoupper($request->get('hejr_email')); 
       
       Autor::whereId($id)->update($datosAutor);
       
       return redirect("autor")->with([
        'Mensaje' => 'Autor actualizado'
       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         $libro = DB::table('libros' )
     ->join('Autors','libros.autor_id','=','Autors.id')
   
      ->select('Autors.hejr_nombres','Autors.hejr_apellidos','Autors.id as id del autor','libros.autor_id','libros.hejr_titulo')
      
        ->where('libros.autor_id','=',$id)
        ->get();

        if(count($libro) <= 0){
          
            Autor::whereId($id)->delete();
       
            return redirect('/autor')->with([
            'Mensaje' => 'Autor Eliminado',
             ]);
      
        }
        else {
            $recuperar = Autor::findOrFail($id);
             $autor = $recuperar['hejr_nombres'] .' '. $recuperar['hejr_apellidos'];
             return redirect('/autor')->with([
            'Mensaje' => 'No se puede eliminar el autor. Elimine  los libros que esten asociados al actor '.$autor,
             ]);
        }
         

       
        



        
        
    }
}
