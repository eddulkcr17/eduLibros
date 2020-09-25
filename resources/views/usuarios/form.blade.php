@include("asset.validacion")

  					<div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Rol</label>
		                    <div class="col-md-9">
		                        <select class="form-control" required name="rol_id">
		                        	@forelse($roles as $rol)
		                        		
		                        		<option value="{{ $rol->id }}">{{ $rol->hejr_nombre }}</option>
		                        	@empty
		                        	<span class="text-danger">No se encontraron roles</span>

		                        	@endforelse
		                        </select>
		                        @error('rol_id')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>




  					 <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Nombres - Apellidos</label>
		                    <div class="col-md-9">
		                        <input type="text" name="name"  value="{{ old('name') }}" id="demo-text-input" class="form-control" placeholder="Ingrese nombre y apellidos">
		                        @error('name')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>

		             <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Email</label>
		                    <div class="col-md-9">
		                        <input type="text" name="email" value="{{ old('email') }}"   id="demo-text-input" class="form-control" placeholder="Ingrese Email">
		                        @error('email')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		            </div>

		              <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Password</label>
		                    <div class="col-md-9">
		                        <input type="password" name="password"  id="demo-text-input" class="form-control" placeholder="Ingrese password">
		                        @error('password')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>
		


					 <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Cedula</label>
		                    <div class="col-md-9">
		                        <input type="text" name="dni" required=""  value="{{ old('dni') }}" id="documento" onBlur="validarDocumento()" onKeyPress="return soloNumeros(event)"  id="documento" class="form-control" placeholder="Ingrese cedula">
		                        @error('dni')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>

		             <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Direccion</label>
		                    <div class="col-md-9">
		                        <input type="text" name="direccion" value="{{ old('direccion') }}"  id="demo-text-input" class="form-control" placeholder="Ingrese direccion">
		                        @error('direccion')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>

		             <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Telefono</label>
		                    <div class="col-md-9">
		                        <input type="text" name="telefono" value="{{ old('telefono') }}"  id="demo-text-input" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Ingrese telefono">
		                        @error('telefono')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		             </div>

		               <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-email-input">Sexo</label>
		                    <div class="col-md-9">
		                        <select name="sexo" class="form-control">
		                        	<option value="">Seleccion tipo de sexo</option>	
		                        	<option value="H">Hombre</option>
		                        	<option value="M">Mujer</option>
		                        </select>
		                        @error('sexo')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Fecha Nacimiento</label>
		                    <div class="col-md-9">
		                        <input type="text" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" placeholder="2001/05/15" id="fecha" class="form-control">
		                        @error('fecha_nacimiento')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>

		                  <div class="form-group">
			                    <label class="col-md-3 control-label">Seleccione Foto</label>
			                    <div class="col-md-9">
			                        <span class="pull-left btn btn-primary btn-file">
			                        Cargar Foto... <input type="file" name="foto">
			                        </span>
			                    </div>

			                    @error('foto')
		                       		 <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
			                </div>

		
		         
							              
					
					           
					
					              
					               
					 <div class="modal-footer">
	                    <a href="{{ route('usuario.index') }}" class="btn btn-default" type="button">Close</a>
	                    <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Agregar?')" value="Crear Usuario" name="">
                    
               		 </div>