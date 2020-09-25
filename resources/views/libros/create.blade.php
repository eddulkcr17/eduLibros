@extends('layouts.template')

@section('titulo')
	Mantenimiento de Libros
@endsection

@section('content')

	 	
	   <div class="col-lg-12 ">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title">Agregar Informacion del libro</h3>
                  </div>
      
      
             
           <form action="{{ route('libro.store') }}" onsubmit="return validacionLibro()" method="post" class="panel-body form-horizontal form-padding">
                        @csrf
                        <!--Static-->
                        @include('libros.form',['mensaje'=> 'crear'])
                                    
                     </form>
      
              </div>
          </div>






         
         
       

 
		

@endsection