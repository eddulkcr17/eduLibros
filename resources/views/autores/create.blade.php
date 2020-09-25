@extends('layouts.template')

@section('titulo')
	Mantenimiento de Roles
@endsection

@section('content')

		
	
            <!-- MODALES -->

     <div class="col-lg-12 ">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title bg-warning" style="color:#fff">Agregar Informacion del Autor</h3>
                  </div>
      
      
                  <!-- BASIC FORM ELEMENTS -->
              <form action="{{ route('autor.store') }}" onsubmit="return esfechavalida() " method="post" name="forma" class="panel-body form-horizontal form-padding">
                        @csrf
                        <!--Static-->
                        @include('autores.form',['mensaje'=> 'crear'])
                                    
                     </form>
                  <!--===================================================-->
                  <!-- END BASIC FORM ELEMENTS -->
      
      
              </div>
          </div>
		

@endsection