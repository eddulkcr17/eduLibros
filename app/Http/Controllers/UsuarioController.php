<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

       
        if(Auth::user()->rol->hejr_nombre == 'ADMINISTRADOR'){
                $user = User::all();
                $leer = $user;

                $role = Rol::all();
                $roles = $role;
                return view('usuarios.index',compact('leer','roles'));  
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
        $role = Rol::all();
        $roles = $role;
        return view('usuarios.create',compact('roles')); 
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
            'rol_id' => 'required | ',
            'name' => 'required | min:5 | max:30  | regex:/^[\pL\s\-]+$/u',
            'email' => 'required | email | string | unique:users',
            'password' => 'required | string | min:8 | max:30',
            'dni' => 'required | alpha_num | max:15 | min:10 | unique:users',
            'sexo' => 'required',
            'direccion' => 'max:50| min:6 | string',
            'telefono' => 'required | min:7 | max:15 | alpha_num' ,
            'fecha_nacimiento' => 'required | date',
            'foto' => 'required | image'

        ];
      
      $this->validate($request,$datos);
        $datosUsuario=request()->except('_token');
        $datosUsuario['name']= strtoupper($request->get('name'));
         $datosUsuario['email']= strtoupper($request->get('email'));
          $datosUsuario['direccion']= strtoupper($request->get('direccion'));

         if($request->hasFile('foto')){
            $datosUsuario['foto']=$request->file('foto')->store('uploads','public');
        }

        
        User::insert($datosUsuario);
       
        return redirect('/usuario')->with([
            'Mensaje' => 'Usuario Agregado'
        ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Rol::all();
        $roles = $role;

        $actualizar = User::findOrFail($id);
        return view('usuarios.edit',compact('actualizar','roles'));
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
            'rol_id' => 'required | ',
            'name' => 'required | min:5 | max:30  | regex:/^[\pL\s\-]+$/u',
            'email' => 'required | email | string | ',
            'password' => 'required | string | min:8 | max:30',
            'dni' => 'required | alpha_num | max:15 | min:10 |',
            'sexo' => 'required',
            'direccion' => 'max:50| min:6 | string',
            'telefono' => 'required | min:7 | max:15 | alpha_num' ,
            'fecha_nacimiento' => 'required | date',
          
            'estado' => 'required'

        ];
      
      $this->validate($request,$datos);


       $datosUsuario = request()->except('_token','_method'); 
       $datosUsuario['name']= strtoupper($request->get('name'));
         $datosUsuario['email']= strtoupper($request->get('email'));
          $datosUsuario['direccion']= strtoupper($request->get('direccion'));
          
        if($request->hasFile('foto')){

            $usuario = User::findOrFail($id);

            Storage::delete('public/'.$usuario->foto);
            
            $datosUsuario['foto']=$request->file('foto')->store('uploads','public');
        }
         User::whereId($id)->update($datosUsuario);
       
       return redirect("usuario")->with([
        'Mensaje' => 'Usuario actualizado'
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
       $usuario = User::findOrFail($id);

       if(Storage::delete('public/'.$usuario->foto)){
            User::whereId($id)->delete();
       }



        

         return redirect('/usuario')->with([
        'Mensaje' => 'Usuario Eliminado',
    ]);
    }
}
