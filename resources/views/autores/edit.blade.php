@extends('layouts.template')

@section('titulo')
	Mantenimiento de Roles
@endsection

@section('content')
@include("asset.validacion")	
	
         <div class="col-lg-12 ">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title">Editar Informacion del Autor</h3>
                  </div>
      
      
                  <!-- BASIC FORM ELEMENTS -->
                  <!--===================================================-->
                  <form  action="{{ route('autor.update', $actualizar->id) }}" onsubmit="return esfechavalida() " name="forma" id="form1" method="post" class="panel-body form-horizontal form-padding">
                    @csrf
                    @method('PUT')
      
                 <div class="form-group">
                    <label class="col-md-3 control-label" for="demo-text-input">Nombres</label>
                        <div class="col-md-9">
                            <input type="text" name="hejr_nombres" value="{{ isset($actualizar->hejr_nombres) ? $actualizar->hejr_nombres : '' }}" id="demo-text-input" class="form-control" placeholder="Nombres">
                            @error('hejr_nombres')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
    
                    <!--Text Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Apellidos</label>
                        <div class="col-md-9">
                            <input type="text" name="hejr_apellidos" value="{{ isset($actualizar->hejr_apellidos) ? $actualizar->hejr_apellidos : ''  }}" id="demo-text-input" class="form-control" placeholder="Apellidos">
                            @error('hejr_apellidos')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
    
                    <!--Email Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-email-input">Tipo DNI</label>
                        <div class="col-md-9">
                            <select name="hejr_tipo_dni" class="form-control">
                              <option>Seleccion tipo de dni</option>  
                              <option value="C" @if($actualizar->hejr_tipo_dni == 'C') selected=""  @endif) >Cedula Ciudadania</option>
                              <option value="P" @if($actualizar->hejr_tipo_dni == 'P') selected=""  @endif) >Pasaporte</option>
                            </select>
                             @error('hejr_tipo_dni')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Dni</label>
                        <div class="col-md-9">
                            <input type="number" id="documento" onblur="validarDocumento()" name="hejr_dni"  onKeyPress="return soloNumeros(event)" value="{{ isset($actualizar->hejr_dni) ? $actualizar->hejr_dni : ''  }}" id="demo-text-input" class="form-control" placeholder="Ingrese Dni">
                             @error('hejr_dni')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-email-input">Sexo</label>
                        <div class="col-md-9">
                            <select name="hejr_sexo" class="form-control">
                              <option>Seleccion tipo de sexo</option> 
                              <option value="H" @if($actualizar->hejr_sexo == 'H') selected=""  @endif) >Hombre</option>
                              <option value="M" @if($actualizar->hejr_sexo == 'M') selected=""  @endif) >Mujer</option>
                            </select>
                            @error('hejr_sexo')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Fecha Nacimiento</label>
                        <div class="col-md-9">
                            <input type="text" id="fecha" onblur="esfechavalida();" name="hejr_fecha_autor" value="{{ isset($actualizar->hejr_fecha_autor) ? $actualizar->hejr_fecha_autor : ''  }}"  id="demo-text-input" class="form-control" placeholder="Ingrese Email">
                            @error('hejr_fecha_autor')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
    

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Email</label>
                        <div class="col-md-9">
                            <input type="text" name="hejr_email" value="{{ isset($actualizar->hejr_email) ? $actualizar->hejr_email : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese Email">
                            @error('hejr_email')
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
                      <a href="{{ route('autor.index') }}" class="btn btn-default" type="button">Close</a>
                      <input type="submit" id="Guardar" class="btn btn-primary"  onclick="return confirm('Desea Actualizar?')" value="Actualizar Actor" name="">
                    
                   </div>
                  </form>
                  <!--===================================================-->
                  <!-- END BASIC FORM ELEMENTS -->
      
      
              </div>
          </div>  

   
		

@endsection