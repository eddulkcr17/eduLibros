@include("asset.validacion")



  					 <div class="form-group">
		                <label class="col-md-3 control-label" for="demo-text-input">Nombres</label>
		                    <div class="col-md-9">
		                        <input type="text"  id="nombres" value="{{ old('hejr_nombres') }}" name="hejr_nombres" value="{{ isset($actualizar->hejr_nombres) ? $actualizar->hejr_nombres : '' }}" id="demo-text-input" class="form-control" placeholder="Nombres">
		                        @error('hejr_nombres')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>
		
		                <!--Text Input-->
		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Apellidos</label>
		                    <div class="col-md-9">
		                        <input type="text"  id="apellidos" value="{{ old('hejr_apellidos') }}" name="hejr_apellidos" value="{{ isset($actualizar->hejr_apellidos) ? $actualizar->hejr_apellidos : ''  }}" id="demo-text-input" class="form-control" placeholder="Apellidos">
		                        @error('hejr_apellidos')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>
		
		                <!--Email Input-->
		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-email-input">Tipo DNI</label>
		                    <div class="col-md-9">
		                        <select required="" name="hejr_tipo_dni" class="form-control">
		                        	<option value="">Seleccion tipo de dni</option>	
		                        	<option value="C" >Cedula Ciudadania</option>
		                        	<option value="P" >Pasaporte</option>
		                        </select>

		                        @error('hejr_tipo_dni')
									<span class="invalid-feedback d-block" role="alert">
										{{ $message }}
									</span>
									
								@enderror	
		                        
		                    </div>
		                </div>

		                 <div class="form-group">
		                    <label class="col-md-3  control-label" for="demo-text-input">Dni</label>
		                    <div class="col-md-9">
		                        <input type="number" value="{{ old('hejr_dni') }}" required="" id="documento" onblur="validarDocumento()" name="hejr_dni"  onKeyPress="return soloNumeros(event)" value="{{ isset($actualizar->hejr_dni) ? $actualizar->hejr_dni : ''  }}" id="demo-text-input" class="form-control" placeholder="Ingrese Dni">
		                         @error('hejr_dni')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>

		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-email-input">Sexo</label>
		                    <div class="col-md-9">
		                        <select required="" name="hejr_sexo" class="form-control">
		                        	<option value="">Seleccion tipo de sexo</option>	
		                        	<option value="H">Hombre</option>
		                        	<option value="M">Mujer</option>
		                        </select>

	                           @error('hejr_sexo')
								<span class="invalid-feedback d-block" role="alert">
									{{ $message }}
								</span>
								@enderror	
		                       
		                    </div>
		                </div>

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Fecha Nacimiento(yyyy-mm-dd)</label>
		                    <div class="col-md-9">
		                        <input type="text"  id="fecha" value="{{ old('hejr_fecha_autor') }}"  name="hejr_fecha_autor" value="{{ isset($actualizar->hejr_fecha_autor) ? $actualizar->hejr_fecha_autor : ''  }}"  id="demo-text-input" class="form-control" placeholder="Ingrese fecha">
		                        @error('hejr_fecha_autor')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>
		

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Email</label>
		                    <div class="col-md-9">
		                        <input type="text"  id="email" value="{{ old('hejr_email') }}" name="hejr_email" value="{{ isset($actualizar->hejr_email) ? $actualizar->hejr_email : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese Email">
		                        @error('hejr_email')
		                        <small class="help-block text-danger">{{ $message }}</small>
		                        @enderror
		                    </div>
		                </div>         
								              
								              
					               
					<div class="modal-footer">
	                    <a href="{{ route('autor.index') }}" class="btn btn-default" type="button">Close</a>
	                    <input type="submit"  class="btn btn-primary"  onclick="return confirm('Desea Agregar?')" value="Crear Actor" name="">
                    
               		 </div>

               		

               		