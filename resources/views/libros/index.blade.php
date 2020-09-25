@extends('layouts.template')

@section('titulo')
	Mantenimiento de Libros
@endsection

@section('content')

		
	 <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                 <a  href="{{ route('libro.create') }}"  class="btn btn-warning btn-rounded " style="color: white">Agregar</a>

                 @auth 
                    @if(Auth::user()->rol->hejr_nombre == 'ADMINISTRADOR') 
                      <button data-target="#modal-aumentar" data-toggle="modal" class="btn btn-info btn-rounded">Porcentaje +</button>

                      <button data-target="#modal-disminuir" data-toggle="modal" class="btn btn-danger btn-rounded">Porcentaje -</button>
                    @endif
                  @endauth   

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
                      <th>Autor</th>  
                      <th>Editorial</th>                                
                      <th >ISBN</th>
                      <th >Titulo</th>
                      <th >Año</th>
                      <th >Precio de venta</th>
                       <th >Otros autores</th>
                      <th>Eliminar</th>
                      <th>Editar</th>
                      @auth @if(Auth::user()->rol->hejr_nombre == 'ADMINISTRADOR')

                       <th>Porcentaje</th>
                      @endif
                      @endauth
                   
                      
                  </tr>
                  </thead>
              
                    <tbody>
                          @foreach($leer as $recorrer)
                                    <tr>
                                        <td> {{ isset($recorrer->autor->hejr_nombres) ? $recorrer->autor->hejr_nombres .' '. $recorrer->autor->hejr_apellidos   : '' }} 
                                        </td>
                                        <td>{{ isset($recorrer->editorial->hejr_nombre) ? $recorrer->editorial->hejr_nombre : '' }}
                                        </td>

                                        <td>{{ $recorrer->hejr_ISBN }}</td>
                                        <td>{{ $recorrer->hejr_titulo }}</td>
                                        <td>{{ $recorrer->hejr_anio }}</td>
                                        <td>{{ $recorrer->hejr_precio_venta }}</td>
                                        <td>{{ $recorrer->hejr_otros_autores }}</td>
                                        <td>
                                            <form action="{{ route('libro.destroy',$recorrer->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                  <button class="btn btn-danger btn-icon" onclick="return confirm('Desea Eliminar?')"><i class="fa fa-times-circle"></i></button>
                                            </form> 
                                            
                                        </td>
                                        <td>  
                                                                               
                                            <a class="btn btn-info btn-icon" href="{{ route('libro.edit',$recorrer->id) }}"><i class="fa fa-pen-square"></i></a>
                                        </td>

                                       @if(Auth::user()->rol->hejr_nombre == 'ADMINISTRADOR')

                                        <td>
                                            <a href="{{ route('aumentaindividual.edit',$recorrer->id) }}" class="btn btn-link btn-icon icon-lg fa fa-chevron-up">
                                                
                                            </a>
                                        @if($recorrer->hejr_precio_venta > 1)    
                                            <a href="{{ route('restaindividual.edit',$recorrer->id) }}" class="btn btn-link btn-icon icon-lg fa fa-chevron-down">
                                        @else
                                            <span class="text-danger">No disminuir precio</span>        
                                        @endif        
                                            </a>
                                        </td>
                                    @endif 
                                   
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

  

    <div class="modal fade" id="modal-aumentar" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title text-center">Aumentar porcentaje a todos los Libros </h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                     <form action="{{ route('porcentaje.aumentar') }}"  method="post" class="panel-body form-horizontal form-padding">
                        @csrf
                        <!--Static-->
                        @include('libros.formPorcentaje')
                                    
                     </form>
                   
                </div>

                <!--Modal footer-->
             
            </div>
        </div>
    </div>

     <div class="modal fade" id="modal-disminuir" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title text-center">Disminuir porcentaje a todos los Libros </h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                     <form action="{{ route('porcentaje.disminuir') }}" onsubmit="return validacionPorcentaje()"  method="post" class="panel-body form-horizontal form-padding">
                        @csrf
                        <!--Static-->
                        @include('libros.formPorcentajeDisminuir')
                                    
                     </form>
                   
                </div>

                <!--Modal footer-->
             
            </div>
        </div>
    </div>

		

@endsection