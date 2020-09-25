@extends('layouts.template')

@section('titulo')
	Mantenimiento de Editoriales
@endsection

@section('content')

      <div class="col-lg-12 ">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title">Editar Informacion de la Editorial</h3>
                  </div>
      
      
                  <!-- BASIC FORM ELEMENTS -->
                  <!--===================================================-->
                  <form  action="{{ route('editorial.update', $actualizar->id) }}" method="post" class="panel-body form-horizontal form-padding">
                    @csrf
                    @method('PUT')
      
                                 <div class="form-group">
                    <label class="col-md-3 control-label" for="demo-text-input">Nombre Editorial</label>
                        <div class="col-md-9">
                            <input type="text" id="editorial" name="hejr_nombre" value="{{ isset($actualizar->hejr_nombre) ? $actualizar->hejr_nombre : '' }}" id="demo-text-input" class="form-control" placeholder="Ingrese nombre editorial">
                            @error('hejr_nombre')
                            <small class="help-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
    
                  

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Email</label>
                        <div class="col-md-9">
                            <input type="text" id="email" name="hejr_email" value="{{ isset($actualizar->hejr_email) ? $actualizar->hejr_email : ''  }}"   id="demo-text-input" class="form-control" placeholder="Ingrese Email">
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
                      <a href="{{ route('editorial.index') }}" class="btn btn-default" type="button">Close</a>
                      <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Actualizar?')" value="Actualizar Editorial" name="">
                    
                   </div>
          </form>
                  <!--===================================================-->
                  <!-- END BASIC FORM ELEMENTS -->
      
      
              </div>
          </div>
       

 
		

@endsection