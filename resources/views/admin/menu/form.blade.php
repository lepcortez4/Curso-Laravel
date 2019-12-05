<div class="form-group row">
  <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
  <div class="col-lg-8">
    <input type="text" name='nombre' class="form-control" id="nombre" required value="{{ old('nombre') }}"/>
  </div>
</div>
<div class="form-group row">
  <label for="url" class="col-lg-3 col-form-label requerido">Url</label>
  <div class="col-lg-8">
    <input type="text" name='url' class="form-control" id="url" required value="{{ old('url') }}"/>
  </div>
</div>
<div class="form-group row">
  <label for="icono" class="col-lg-3 col-form-label">Icono</label>
  <div class="col-lg-8">
    <input type="text" name='icono' class="form-control" id="icono" value="{{ old('icono') }}">
  </div>
  <div class="col-lg-1">
    <span id='mostrar-icono' class="fa fa-fw {{ old("icono") }}"></span>
  </div>
</div>