@extends('layouts.vistapadre');

@section('contenidoprincipal')
<h2>Nuevo Registro</h2>

<div class="card">
  <div class="card-body ">
    <form action="/pacientes" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputName">Nombre</label>
          <input name="nombre" type="text" class="form-control" id="inputName" placeholder="Nombre/s">
        </div>
  
        <div class="form-group col-md-3">
          <label for="inputPaterno">Apellido Paterno</label>
          <input name="paterno" type="text" class="form-control" id="inputPaterno" placeholder="Apellido Paterno">
        </div>
  
        <div class="form-group col-md-3">
          <label for="inputMaterno">Apellido Materno</label>
          <input name="materno" type="text" class="form-control" id="inputMaterno" placeholder="Apellido Materno">
        </div>
      </div>
  
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputTel">Telefono</label>
          <input name="telefono" type="text" class="form-control" id="inputTel" placeholder="Telefono">
        </div>
  
        <div class="form-group col-md-6">
          <label for="inputEmail">email</label>
          <input name="email" type="email" class="form-control" id="inputEmail" placeholder="email">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCalle">Calle</label>
          <input name="calle" type="text" class="form-control" id="inputCalle" placeholder="Calle">
        </div>
  
        <div class="form-group col-md-4">
          <label for="inputCol">Colonia</label>
          <input name="colonia" type="text" class="form-control" id="inputCol" placeholder="Colonia">
        </div>
      </div>
      
      <a href="/pacientes" class="btn btn-lg btn-secondary mt-4">Cancelar</a>
      <button type="submit" class="btn btn-lg btn-success mt-4">Guardar</button>
  </form>
  </div>
</div>
@endsection