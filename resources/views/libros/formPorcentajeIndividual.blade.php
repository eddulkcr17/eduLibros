        <div class="form-group">
             <label class="col-md-4 control-label" for="demo-text-input">Porcentaje(Valido 10, 20 etc)</label>
            <div class="col-md-8">
                <input type="text" required="" name="hejr_porcentaje"  id="porcentaje"  class="form-control" placeholder="Ingrese Procentaje">
                @error('hejr_porcentaje')
                <small class="help-block text-danger">{{ $message }}</small>
                @enderror
            </div>

             <div class="col-md-8">
                <input type="hidden" name="hejr_titulo"  value="{{ $actualizar->hejr_titulo }}" id="demo-text-input" class="form-control" placeholder="Ingrese Procentaje">
                @error('hejr_titulo')
                <small class="help-block text-danger">{{ $message }}</small>
                @enderror
            </div>

        </div>

         <div class="modal-footer">
            <a href="{{ route('libro.index') }}" class="btn btn-default" type="button">Close</a>
            <input type="submit" onclick="return confirm('Desea cambiar el porcentaje?')" class="btn btn-primary"  value="{{ $mensaje === 'aumentar' ? 'Aumentar ' : ' Disminuir' }} Porcentaje del libro" name="">
        
        </div>