@extends('layouts.template')

@section('titulo')
	Mantenimiento de Libros
@endsection

@section('content')

	 	
	  <div class="col-lg-12 ">
			        <div class="panel">
			            <div class="panel-heading">
			                <h3 class="panel-title bg-primary">Editar Informacion del libro</h3>
			            </div>
			
			
			       
			            <!--===================================================-->
			            <form  action="{{ route('libro.update', $actualizar->id) }}"  method="post" class="panel-body form-horizontal form-padding">
			            	@csrf
			            	@method('PUT')


			         
			     


		           <div class="form-group">
	                <label class="col-md-3 control-label" for="demo-text-input">Autor</label>
	                    <div class="col-md-9">
	                        <select class="form-control" name="autor_id">
	                        	@forelse($autores as $autor)
	                        	
	                        		<option value="{{ $autor->id }}" @if($autor->id == $actualizar->autor_id) selected="" @endif>{{ $autor->hejr_nombres. ' '.$autor->hejr_apellidos }}</option>
	                        	@empty
	                        	<span class="text-danger">No se encontraron roles</span>

	                        	@endforelse
	                        </select>
	                        @error('autor_id')
	                        <small class="help-block text-danger">{{ $message }}</small>
	                        @enderror
	                    </div>
	            	 </div>	


			   
		             <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Seleccione Editorial</label>
		                    <div class="col-md-9">
		                        <select class="form-control" name="editorial_id">
		                        	@forelse($editoriales as $editorial)
		                        	
		                        		<option value="{{ $editorial->id }}" @if($editorial->id == $actualizar->editorial_id) selected="" @endif>{{ $editorial->hejr_nombre }}</option>


		                        	@empty
		                        	<span class="text-danger">No se encontraron roles</span>

		                        	@endforelse
		                        </select>
		                        @error('editorial_id')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>

			
			            <div class="form-group">
			                	<label class="col-md-3 control-label" for="demo-text-input">ISBN</label>
			                    <div class="col-md-9">
			                        <input type="text" required="" name="hejr_ISBN" id="isbn" onblur="run()" value="{{ isset($actualizar->hejr_ISBN) ? $actualizar->hejr_ISBN : '' }}" id="demo-text-input" class="form-control" placeholder="Ingrese ISBN">
			                        @error('hejr_ISBN')
			                        <small class="help-block text-danger">{{ $message }}</small>
			                        @enderror
			                    </div>
		                </div>
		
		             	

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Titulo</label>
		                    <div class="col-md-9">
		                        <input type="text" id="titulo" name="hejr_titulo" value="{{ isset($actualizar->hejr_titulo) ? $actualizar->hejr_titulo : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese titulo">
		                        @error('hejr_titulo')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Año</label>
		                    <div class="col-md-9">
		                        <input type="text" id="anio" name="hejr_anio" value="{{ isset($actualizar->hejr_anio) ? $actualizar->hejr_anio : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese Año del libro">
		                        @error('hejr_anio')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Precio de venta</label>
		                    <div class="col-md-9">
		                        <input type="text" id="precio" name="hejr_precio_venta" value="{{ isset($actualizar->hejr_precio_venta) ? $actualizar->hejr_precio_venta : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese Precio de venta">
		                        @error('hejr_precio_venta')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>

		                   <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Otros autores</label>
		                    <div class="col-md-9">
		                        <input  name="hejr_otros_autores"  style="resize: none" value="{{ isset($actualizar->hejr_otros_autores) ? $actualizar->hejr_otros_autores : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese otros autores">
		                        @error('hejr_otros_autores')
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
	                    <a href="{{ route('libro.index') }}" class="btn btn-default" type="button">Close</a>
	                    <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Actualizar?')" value="Actualizar Libro" name="">
                    
               		 </div>
			            </form>
			            <!--===================================================-->
			            <!-- END BASIC FORM ELEMENTS -->
			
			
			        </div>
			    </div>





         
         
       

 
		

@endsection