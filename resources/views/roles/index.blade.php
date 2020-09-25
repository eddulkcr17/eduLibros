@extends('layouts.template')

@section('titulo')
	Mantenimiento de Roles
@endsection

@section('content')

		
	 <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <button data-target="#demo-default-modal" data-toggle="modal" class="btn btn-warning btn-rounded">Agregar</button>
                
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
	                    <th >Estado</th>
	                    <th>Eliminar</th>
	                    <th>Editar</th>
                  </tr>
                  </thead>
              
                    <tbody>
                        @foreach($leer as $recorrer)
                        <tr>
                            <td>{{ $recorrer->hejr_nombre }}</td>
                            <td>{{ $recorrer->hejr_estado }}</td>
                            <td>
                                <form action="{{ route('rol.destroy',$recorrer->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                      <button class="btn btn-danger btn-icon" onclick="return confirm('Desea Eliminar?')"><i class="fa fa-times-circle"></i></button>
                                </form> 
                                
                            </td>
                            <td>  
                             

                                                     
                                <a class="btn btn-info btn-icon" href="{{ route('rol.edit',$recorrer->id) }}"><i class="fa fa-pen-square"></i></a>
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
         
            <!-- MODALES -->

    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Rol</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  action="{{ route('rol.store') }}"  method="post">
                @csrf
                        <!--Static-->
                 @include('roles.form',['mensaje'=> 'crear'])
                
              </form>
            </div>

             
              
              
             
            </div>
        </div>
    </div>
		

@endsection