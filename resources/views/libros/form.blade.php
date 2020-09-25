				<div class="form-group">
	                <label class="col-md-3 control-label" for="demo-text-input">Autor</label>
	                    <div class="col-md-9">
	                        <select class="form-control" required="" name="autor_id">
	                        	@forelse($autores as $autor)
	                        	
	                        		<option value="{{ $autor->id }}">{{ $autor->hejr_nombres .' '. $autor->hejr_apellidos}}</option>
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
	                <label class="col-md-3 control-label" for="demo-text-input">Editorial</label>
	                    <div class="col-md-9">
	                        <select class="form-control" required="" name="editorial_id">
	                        	@forelse($editoriales as $editorial)
	                        	
	                        		<option value="{{ $editorial->id }}">{{ $editorial->hejr_nombre }}</option>
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
                        <input type="text" name="hejr_ISBN"  required="" value="{{ old('hejr_ISBN') }}"  id="isbn" onblur="run()"   class="form-control" placeholder="Ingrese ISBN">
                        @error('hejr_ISBN')
                        <small class="help-block text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
               		 <label class="col-md-3 control-label" for="demo-text-input">Titulo</label>
                    <div class="col-md-9">
                        <input type="text" name="hejr_titulo"  id="titulo" value="{{ old('hejr_titulo') }}" class="form-control" placeholder="Ingrese el titulo del libro">
                        @error('hejr_titulo')
                        <small class="help-block text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
               		 <label class="col-md-3 control-label" for="demo-text-input">Año</label>
                    <div class="col-md-9">
                        <input type="number" name="hejr_anio"  value="{{ old('hejr_anio') }}" id="anio" class="form-control" placeholder="Ingrese el año del libro">
                        @error('hejr_anio')
                        <small class="help-block text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>


                
		             
	            <div class="form-group">
	                    <label class="col-md-3 control-label" for="demo-text-input">Precio de venta</label>
	                    <div class="col-md-9">
	                        <input type="text" name="hejr_precio_venta" value="{{ old('hejr_precio_venta') }}"    id="precio" class="form-control" placeholder="Ingrese precio de venta">
	                        @error('hejr_precio_venta')
	                        <small class="help-block text-danger">{{ $message }}</small>
	                        @enderror
	                    </div>
	            </div>
					
			  <div class="form-group">
                    <label class="col-md-3 control-label"  for="demo-text-input">Otros autores</label>
                    <div class="col-md-9">
                        <input  name="hejr_otros_autores"  value="No hay"  id="autor" class="form-control" placeholder="Ingrese otros autores">
                        @error('hejr_otros_autores')
                        <small class="help-block text-danger">{{ $message }}</small>
                        @enderror
                    </div>
	            </div>
						              
					 
					              
					
					              
				               
				 <div class="modal-footer">
	                    <a href="{{ route('libro.index') }}" class="btn btn-default" type="button">Close</a>
	                    <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Agregar?')" value="Crear Libro" name="">
                    
               	</div>
