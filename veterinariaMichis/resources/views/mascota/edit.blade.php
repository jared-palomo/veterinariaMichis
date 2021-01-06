@extends('layouts.vistapadre');

@section('contenidoprincipal')
<h2>Nuevo Registro</h2>

<div class="card">
  <div class="card-body ">
    <form action="/pacientes/{{$paciente->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputName">Nombre</label>
          <input name="nombre" type="text" class="form-control" id="inputName" value="{{$paciente->nombre}}">
        </div>
  
        <div class="form-group col-md-3">
          <label for="inputPaterno">Apellido Paterno</label>
          <input name="paterno" type="text" class="form-control" id="inputPaterno" value="{{$paciente->a_paterno}}">
        </div>
  
        <div class="form-group col-md-3">
          <label for="inputMaterno">Apellido Materno</label>
          <input name="materno" type="text" class="form-control" id="inputMaterno" value="{{$paciente->a_materno}}">
        </div>
      </div>
  
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputTel">Telefono</label>
          <input name="telefono" type="text" class="form-control" id="inputTel" value="{{$paciente->telefono}}">
        </div>
  
        <div class="form-group col-md-6">
          <label for="inputEmail">email</label>
          <input name="email" type="email" class="form-control" id="inputEmail" value="{{$paciente->correo}}">
        </div>
      </div>
      
      @php
        $dir = $paciente->Direccion;
        $direccion = explode(" ", $dir);
      @endphp

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCalle">Calle</label>
          <input name="calle" type="text" class="form-control" id="inputCalle" value="{{$direccion[0]}}">
        </div>
  
        <div class="form-group col-md-4">
          <label for="inputCol">Colonia</label>
          <input name="colonia" type="text" class="form-control" id="inputCol" value="{{$direccion[1]}}">
        </div>
      </div>
      
      <a href="/pacientes" class="btn btn-lg btn-secondary mt-4">Cancelar</a>
      <button type="submit" class="btn btn-lg btn-success mt-4">Guardar</button>
  </form>
  </div>
</div>
@endsection