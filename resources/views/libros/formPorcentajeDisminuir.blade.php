		<div class="form-group">
       		 <label class="col-md-4 control-label" for="demo-text-input">Porcentaje(Valido 10, 20 etc)</label>
            <div class="col-md-8">
                <input type="text" required="" name="hejr_porcentaje"    class="form-control" placeholder="Ingrese Procentaje">
                @error('hejr_porcentaje')
                <small class="help-block text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

         <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <input type="submit" onclick="return confirm('Desea cambiar el porcentaje?')" class="btn btn-primary"  value=" Disminuir Porcentaje del libro" name="">
        
   		 </div>