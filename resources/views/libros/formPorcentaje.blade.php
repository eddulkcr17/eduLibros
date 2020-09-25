  
		<div class="form-group">
       		 <label class="col-md-4 control-label" for="demo-text-input">Porcentaje(Valido 10, 20 etc)</label>
            <div class="col-md-8">
                <input type="number"   name="hejr_porcentaje"  required=""   id="porcentaje" class="form-control" placeholder="Ingrese Procentaje">
                @error('hejr_porcentaje')
                <small class="help-block text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

         <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <input type="submit"  class="btn btn-primary"  value="Aumentar Porcentaje a todos los  libros" name="">
        
   		 </div>

        

      