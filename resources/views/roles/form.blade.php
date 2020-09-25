		 <div class="form-group">
            <label class="col-md-3 control-label" for="demo-text-input">Nombre Rol</label>
                <div class="col-md-9">
                    <input type="text" name="hejr_nombre" id="rol"   class="form-control" placeholder="Ingrese nombre de rol">
                    @error('hejr_nombre')
                    <small class="help-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
         </div>	
		              
						              
		               
		 <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <input type="submit" onclick="return confirm('Desea Agregar?')" class="btn btn-primary"  value="{{ $mensaje === 'crear' ? 'Guardar ' : ' Editar' }} Rol" name="">
        
   		 </div>