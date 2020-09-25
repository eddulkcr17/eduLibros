@extends('layouts.template')

@section('titulo')
	Mantenimiento de Libros
@endsection

@section('content')

		
  <div class="col-lg-12 ">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Restar valor del libro {{ $actualizar->hejr_titulo }}
                  Valor $ {{ $actualizar->hejr_precio_venta }}
                </h3>

            </div>


       
            <!--===================================================-->
            <form  action="{{ route('restaindividual.update', $actualizar->id) }}"   method="post" class="panel-body form-horizontal form-padding">
              @csrf
              @method('PUT')
              @include('libros.formPorcentajeIndividual',['mensaje'=>'restar'])
             </div>
            </form>
            <!--===================================================-->
            <!-- END BASIC FORM ELEMENTS -->


        </div>
    </div>
		

@endsection