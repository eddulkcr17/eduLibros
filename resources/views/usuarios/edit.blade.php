@extends('layouts.template')

@section('titulo')
	Mantenimiento de Usuarios
@endsection

@section('content')
@include("asset.validacion")
		
	 <div class="col-lg-12 ">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title">Editar Informacion del usuario</h3>
                  </div>
      
      
                  <!-- BASIC FORM ELEMENTS -->
                  <!--===================================================-->
              <form  action="{{ route('usuario.update', $actualizar->id) }}" onsubmit="return esfechavalida()" enctype="multipart/form-data" method="post" class="panel-body form-horizontal form-padding">
                @csrf
                @method('PUT')
      



               <div class="form-group">
                  <label class="col-md-3 control-label" for="demo-text-input">Rol</label>
                      <div class="col-md-9">
                          <select class="form-control" required="" name="rol_id">
                            @forelse($roles as $rol)
                            
                              <option value="{{ $rol->id }}" @if($rol->id == $actualizar->rol_id) selected="" @endif>{{ $rol->hejr_nombre }}</option>
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
                    <label class="col-md-3 control-label" enctype="multipart/form-data" for="demo-text-input">Nombres - Apellidos</label>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $actualizar->name }}"   id="demo-text-input" class="form-control" placeholder="Ingrese nombre y apellidos">
                            @error('name')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                 </div>

                 <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Email</label>
                        <div class="col-md-9">
                            <input type="text" name="email" value="{{ $actualizar->email }}"    id="demo-text-input" class="form-control" placeholder="Ingrese Email">
                            @error('email')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="demo-text-input">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" value="{{ $actualizar->password }}"   id="demo-text-input" class="form-control" placeholder="Ingrese password">
                            @error('password')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                 </div>
    


           <div class="form-group">
                    <label class="col-md-3 control-label" for="demo-text-input">Cedula</label>
                        <div class="col-md-9">
                            <input type="text" name="dni" required="" onBlur="validarDocumento()" onKeyPress="return soloNumeros(event)"  id="documento" value="{{ $actualizar->dni }}"    class="form-control" placeholder="Ingrese cedula">
                            @error('dni')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                 </div>

                 <div class="form-group">
                    <label class="col-md-3 control-label" for="demo-text-input">Direccion</label>
                        <div class="col-md-9">
                            <input type="text" name="direccion" value="{{ $actualizar->direccion }}"   id="demo-text-input" class="form-control" placeholder="Ingrese direccion">
                            @error('direccion')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                 </div>

                 <div class="form-group">
                    <label class="col-md-3 control-label" for="demo-text-input">Telefono</label>
                        <div class="col-md-9">
                            <input type="text" name="telefono" value="{{ $actualizar->telefono }}"  id="demo-text-input" onKeyPress="return soloNumeros(event)" class="form-control" placeholder="Ingrese telefono">
                            @error('telefono')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                 </div>

                   <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-email-input">Sexo</label>
                        <div class="col-md-9">
                            <select name="sexo" class="form-control">
                              <option>Seleccion tipo de sexo</option> 
                              <option value="H" @if($actualizar->sexo == 'H') selected=""  @endif) >Hombre</option>
                              <option value="M" @if($actualizar->sexo == 'M') selected=""  @endif) >Mujer</option>
                            </select>
                            @error('sexo')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Fecha Nacimiento</label>
                        <div class="col-md-9">
                            <input type="text" name="fecha_nacimiento" value="{{ $actualizar->fecha_nacimiento }}"    id="demo-text-input" class="form-control">
                            @error('fecha_nacimiento')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Seleccione Foto</label>

                         <div class="col-md-9" >
                          <div class="row">
                            <div class="col-md-4" >
                                <span class="pull-left btn btn-primary btn-file ">
                                Cargar Foto... <input type="file" name="foto">
                                </span>
                            </div>
                            <div class="col-md-8">
                                 @if(isset($actualizar->foto))
      
                    <img style="position: relative; left: 10px;" src="{{ asset('storage').'/'.$actualizar->foto }}" width="100">
                    @endif
                  </div>
                </div>  
                       </div>
                       

                            
                        @error('foto')
                             <small class="help-block text-danger">{{ $message }}</small>
                          @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-email-input">Estado</label>
                        <div class="col-md-9" >
                            <select name="estado" class="form-control">
                              <option>Seleccion de estado</option>  
                              <option value="A" @if($actualizar->estado == 'A') selected=""  @endif) >Activo</option>
                              <option value="I" @if($actualizar->estado == 'I') selected=""  @endif) >Inactivo</option>
                            </select>
                            @error('estado')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                        
          
                        
          
                        
                         
           <div class="modal-footer">
                      <a href="{{ route('usuario.index') }}" class="btn btn-default" type="button">Close</a>
                      <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Actualizar?')" value="Actualizar Usuario" name="">
                    
                   </div>
                  </form>
                  <!--===================================================-->
                  <!-- END BASIC FORM ELEMENTS -->
      
      
              </div>
          </div>
 
		

@endsection