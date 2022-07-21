@extends('layouts.master')

@section('content')
<div class="container">
<h2>Formulario de Registro Sucursal</h2>
<form>

<div class="mb-3">
  <label for="nombreSucursal" class="form-label">Nombre Sucursal</label>
  <input type="text" class="form-control" id="nombreSucursal" placeholder="Sucursal Santiago">
</div>
<div class="mb-3">
  <label for="ciudadSucursal" class="form-label">Ciudad Sucursal</label>
  <input type="text" class="form-control" id="ciudadSucursal" placeholder="Santiago">
</div>
<div class="mb-3">
  <label for="telefonoSucursal" class="form-label">Teléfono Sucursal</label>
  <input type="number" class="form-control" id="telefonoSucursal" placeholder="+56 9 xxx xxxx">
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</div>

</form>

@stop