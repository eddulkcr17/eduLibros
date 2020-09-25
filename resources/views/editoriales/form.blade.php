	 <div class="form-group">
        <label class="col-md-3 control-label" for="demo-text-input">Nombre Editorial</label>
            <div class="col-md-9">
                <input type="text" id="editorial" value="{{ old('hejr_nombre') }}" name="hejr_nombre"  id="demo-text-input" class="form-control" placeholder="Debe Comenzar por la primera letra Mayuscula">
                @error('hejr_nombre')
                <small class="help-block text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

     
    <div class="form-group">
            <label class="col-md-3 control-label" for="demo-text-input">Email</label>
            <div class="col-md-9">
                <input type="text" id="email" value="{{ old('hejr_email') }}" name="hejr_email"    id="demo-text-input" class="form-control" placeholder="Ingrese Email">
                @error('hejr_email')
                <small class="help-block text-danger">{{ $message }}</small>
                @enderror
            </div>
    </div>
	
	              
	
	              
	
	              
	               
	 <div class="modal-footer">
        <a href="{{ route('editorial.index') }}" class="btn btn-default" type="button">Close</a>
        <input type="submit" class="btn btn-primary"  onclick="return confirm('Desea Agregar?')" value="Crear Editorial" name="">
    
	 </div>