@extends('layouts.template')

@section('titulo')
	Mantenimiento de Editoriales
@endsection

@section('content')

        <div class="col-lg-12 ">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title bg-warning">Agregar Informacion de la Editorial</h3>
                  </div>
      
      
                  <!-- BASIC FORM ELEMENTS -->
                  <!--===================================================-->
               <form action="{{ route('editorial.store') }}" onsubmit="return validacionEditorial()" method="post" class="panel-body form-horizontal form-padding">
                        @csrf
                        <!--Static-->
                        @include('editoriales.form',['mensaje'=> 'crear'])
                                    
                     </form>
                  <!--===================================================-->
                  <!-- END BASIC FORM ELEMENTS -->
      
      
              </div>
          </div>
       

 
		

@endsection