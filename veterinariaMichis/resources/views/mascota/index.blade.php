@extends('layouts.vistapadre')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endsection

@section('contenidoprincipal')   
<div class="card">
  <div class="card-body">
    <a href="pacientes/create" class="btn btn-success">Crear nuevo paciente</a>
  </div>
</div>

<div class="card">
    <div class="card-body">
        <table id="pacientes" class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pacientes as $pc)
                    <tr>
                        <td>{{$pc->nombre}}</td>
                        <td>{{$pc->a_paterno.' '.$pc->a_materno}}</td>
                        <td>{{$pc->telefono}}</td>
                        <td>{{$pc->correo}}</td>
                        <td>{{$pc->Direccion}}</td>
                        <td>
                          <a href="/pacientes/{{$pc->id}}/edit" class="btn btn-info mb-2">Editar</a>

                          <form action="{{ route('pacientes.destroy', $pc->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Borrar</button>
                          </form>
                          
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
    $('#pacientes').DataTable();
</script>
@endsection
