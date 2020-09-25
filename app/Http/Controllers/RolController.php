<?php

namespace App\Http\Controllers;

use App\Rol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //select a los roles
       if(Auth::user()->rol->hejr_nombre == 'ADMINISTRADOR'){
                $role = Rol::all();
                $leer = $role;
                return view('roles.index',compact('leer'));    
        }else{
            return "No eres Administrador";
        }   
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
        $datos = [
            'hejr_nombre' => 'required | min:3',
          
        ];
      
      $this->validate($request,$datos);
        $datosRol=request()->except('_token');
        $datosRol['hejr_nombre']= strtoupper($request->get('hejr_nombre'));
      

        
         
        Rol::insert($datosRol);
       
        return redirect('/rol')->with([
            'Mensaje' => 'Rol Agregado'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        $actualizar =  Rol::findOrFail($id);
        return view('roles.edit',compact('actualizar'));
    }

   
    public function update(Request $request,  $id)
    {
       $datos = [
            'hejr_nombre' => 'required | min:3',
            'hejr_estado' => 'required'
        ];
      
      $this->validate($request,$datos);


       $datosRol = request()->except('_token','_method'); 
       $datosRol['hejr_nombre']= strtoupper($request->get('hejr_nombre'));
        
       Rol::whereId($id)->update($datosRol);
       
       return redirect("rol")->with([
        'Mensaje' => 'Rol actualizado'
       ]);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::whereId($id)->delete();
       
        return redirect('/rol')->with([
        'Mensaje' => 'Rol Eliminado',
         ]);
    }
}
