@extends('layouts.template')

@section('titulo')
	Mantenimiento de Roles
@endsection

@section('content')

		
	  <div class="col-lg-12 ">
			        <div class="panel">
			            <div class="panel-heading">
			                <h3 class="panel-title bg-info">Editar Informacion del Rol</h3>
			            </div>
			
			
			            <!-- BASIC FORM ELEMENTS -->
			            <!--===================================================-->
			            <form  action="{{ route('rol.update', $actualizar->id) }}" onsubmit="return validacionRol()" method="post" class="panel-body form-horizontal form-padding">
			            	@csrf
			            	@method('PUT')
			
			           <div class="form-group">
		                	<label class="col-md-3 control-label" for="demo-text-input">Nombre rol</label>
		                    <div class="col-md-9">
		                        <input type="text" id="rol" name="hejr_nombre" value="{{ isset($actualizar->hejr_nombre) ? $actualizar->hejr_nombre : '' }}" id="demo-text-input" class="form-control" placeholder="Ingrese nombre del rol">
		                        @error('hejr_nombre')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>
		
		             	

		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-email-input">Estado</label>
		                    <div class="col-md-9">
		                        <select name="hejr_estado" class="form-control">
		                        	<option>Seleccion de estado</option>	
		                        	<option value="A" @if($actualizar->hejr_estado == 'A') selected=""  @endif) >Activo</option>
		                        	<option value="I" @if($actualizar->hejr_estado == 'I') selected=""  @endif) >Inactivo</option>
		                        </select>
		                        @error('hejr_estado')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>
					
					              
					
					              
					
					              
					               
					 <div class="modal-footer">
	                    <a href="{{ route('rol.index') }}" class="btn btn-default" type="button">Close</a>
	                    <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Actualizar?')" value="Actualizar Rol" name="">
                    
               		 </div>
			            </form>
			            <!--===================================================-->
			            <!-- END BASIC FORM ELEMENTS -->
			
			
			        </div>
			    </div>


@endsection