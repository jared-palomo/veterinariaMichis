@extends('layouts.vistapadre')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endsection

@section('contenidoprincipal')   
{{-- <div class="card">
  <div class="card-body">
    <a href="veterinarios/create" class="btn btn-success">Crear nuevo veterinario</a>
  </div>
</div> --}}

<div class="card">
    <div class="card-body">
        <table id="veterinarios" class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Sexo</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($veterinarios as $vt)
                    <tr>
                        <td>{{$vt->nombre}}</td>
                        <td>{{$vt->a_paterno.' '.$vt->a_materno}}</td>
                        <td>{{$vt->telefono}}</td>
                        <td>{{$vt->correo}}</td>
                        <td>{{$vt->edad}}</td>
                        <td>{{$vt->sexo}}</td>
                        <td>{{$vt->Direccion}}</td>
                        <td>
                          <a class="btn btn-info">Editar</a>
                          <button class="btn btn-danger">Borrar</button>
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#veterinarios').DataTable();
</script>
@endsection
