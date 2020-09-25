@extends('layouts.template')

@section('titulo')
	Mantenimiento de Autores
@endsection

@section('content')

		
	 <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
              <a href="{{ route('autor.create') }}" style="color:white;" class="btn btn-warning btn-rounded">Agregar</a>
              



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
                      <th>Nombres y Apellidos</th>                                 
                      <th >DNI.</th>
                      <th >Sexo</th>
                      <th >Fecha Nacim.</th>
                      <th >Email</th>
                      <th >Estado</th>
                      <th>Eliminar</th>
                      <th>Editar</th>
                   
                      
                  </tr>
                  </thead>
              
                     <tbody>
                        @foreach($leer as $recorrer)
                        <tr>
                            <td>{{ $recorrer->hejr_nombres }} {{ $recorrer->hejr_apellidos }}</td>                               
                            <td>{{ $recorrer->hejr_dni }}</td>
                            <td>{{ $recorrer->hejr_sexo }}</td>
                            <td>{{ $recorrer->hejr_fecha_autor }}</td>
                            <td>{{ $recorrer->hejr_email }}</td>
                            <td>{{ $recorrer->hejr_estado }}</td>
                            <td>
                                <form action="{{ route('autor.destroy',$recorrer->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                      <button class="btn btn-danger btn-icon" onclick="return confirm('Desea Eliminar?')"><i class="fa fa-times-circle"></i></button>
                                </form> 
                                
                            </td>
                            <td>  
                             

                            
                           
                                <a class="btn btn-info btn-icon" href="{{ route('autor.edit',$recorrer->id) }}" ><i class="fa fa-pen-square"></i></a>
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