@extends('layouts.template')

@section('titulo')
	Mantenimiento de Editoriales
@endsection

@section('content')

		
	 <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
               <a href="{{ route('editorial.create') }}"  class="btn btn-warning btn-rounded" style="color:white;">Agregar</a>

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
                      <th> Editorial</th>                                 
                      <th >Email</th>
                      <th >Estado</th>
                      <th>Eliminar</th>
                      <th>Editar</th>
                   
                      
                  </tr>
                  </thead>
              
                    <tbody>
                        @foreach($leer as $recorrer)
                        <tr>
                            <td>{{ $recorrer->hejr_nombre }}</td>
                            <td>{{ $recorrer->hejr_email }}</td>
                            <td>{{ $recorrer->hejr_estado }}</td>
                            <td>
                                <form action="{{ route('editorial.destroy',$recorrer->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                      <button class="btn btn-danger btn-icon" onclick="return confirm('Desea Eliminar?')"><i class="fa fa-times-circle"></i></button>
                                </form> 
                                
                            </td>
                            <td>  
                             

                            
                           
                                <a class="btn btn-info btn-icon" href="{{ route('editorial.edit',$recorrer->id) }}"><i class="fa fa-pen-square"></i></a>
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