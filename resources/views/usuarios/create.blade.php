@extends('layouts.template')

@section('titulo')
	Mantenimiento de Usuarios
@endsection

@section('content')

		
	 <div class="col-lg-12 ">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Agregar Informacion del usuario</h3>
            </div>


            <!-- BASIC FORM ELEMENTS -->
            <!--===================================================-->
         <form action="{{ route('usuario.store') }}" onsubmit="return esfechavalida()" method="post" enctype="multipart/form-data" class="panel-body form-horizontal form-padding">
                  @csrf
                  <!--Static-->
                  @include('usuarios.form',['mensaje'=> 'crear'])
                              
               </form>
            <!--===================================================-->
            <!-- END BASIC FORM ELEMENTS -->


        </div>
    </div>
 
		

@endsection