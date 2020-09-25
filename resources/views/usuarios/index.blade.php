@extends('layouts.template')

@section('titulo')
	Mantenimiento de Usuarios
@endsection

@section('content')

		
	 <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <a href="{{ route('usuario.create') }}" class="btn btn-warning btn-rounded" style="color:white;">Agregar</a> 

                @if(Session::has('Mensaje'))  
                  <div class="alert alert-info alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    {{ Session::get('Mensaje') }}
                  </div>
                @endif

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Rol</th>                                 
                    <th >Nombres</th>
                    <th >Email</th>
                    <th>Dni</th>
                    <th>Sexo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                   
                      
                  </tr>
                  </thead>
              
                    <tbody>
                          @foreach($leer as $recorrer)
                              <tr>
                                  <td>{{ isset($recorrer->rol->hejr_nombre) ? $recorrer->rol->hejr_nombre : '' }}</td>
                                  <td>{{ $recorrer->name }}</td>
                                  <td>{{ $recorrer->email }}</td>
                                  <td>{{ $recorrer->dni }}</td>
                                  <td>{{ $recorrer->sexo }}</td>
                                  <td>{{ $recorrer->direccion }}</td>
                                  <td>{{ $recorrer->telefono }}</td>
                                  <td>{{ $recorrer->estado }}</td>
                                  <td><img src="{{ asset('storage'.'/'.$recorrer->foto) }}" width="50" class="img-thumbnail"></td>
                                  <td>
                                      <form action="{{ route('usuario.destroy',$recorrer->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                            <button class="btn btn-danger btn-icon" onclick="return confirm('Desea Eliminar?')"><i class="fa fa-times-circle"></i></button>
                                      </form> 
                                      
                                  </td>
                                  <td>  
                                   

                                  
                                 
                                      <a class="btn btn-info btn-icon" href="{{ route('usuario.edit',$recorrer->id) }}"><i class="fa fa-pen-square"></i></a>
                                  </td>

                              </tr>
                              @endforeach
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
       

 
		

@endsection