@extends ('layouts.app')

@section ('content')

    <h1 class="text-center texts">Club aeronautica</h1>
    <hr>
@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif 
{{-- @if (isset($message))
  <div class="alert alert-info">{{ $message }}</div>
@endif --}}
{{-- @if (isset($errores))
  <div class="alert alert-danger">{{ var_dump($errores) }}</div>
@endif --}}

@if (isset($errores)){{-- ->any() --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errores->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
          
        <a href="{{ route('index.index') }}" class="btn btn-info mb-3">Ver registros</a>

        <form action="{{ route('index.update', $index->id) }}" method="POST">
             {{ csrf_field() }}
             {{ method_field('PUT') }}

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAmarre">Amarre:</label>
                <input value="{{ $index->Amarre }}"  type="number" class="form-control" id="inputAmarre" name='inputAmarre' placeholder="Amarre">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmbarcacion">Embarcacion:</label>
                <input   value="{{ trim($index->Embarcacion) }}" type="text" class="form-control" id="inputEmbarcacion" name='inputEmbarcacion' placeholder="Embarcacion">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmpleados">Empleados:</label>
              <input value="{{ trim($index->Empleados) }}" type="text" class="form-control" id="inputEmpleados"  name ='inputEmpleados' placeholder="Empleados">
            </div>
            <div class="form-group">
              <label for="inputPertenece">Pertenece:</label>
              <input value="{{ trim($index->Pertenece) }}" type="text" class="form-control" id="inputPertenece" name ='inputPertenece' placeholder="Pertenece">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPropietario">Propietario:</label>
                <input value="{{ trim($index->Propietario) }}" type="text" class="form-control" id="inputPropietario" name ='inputPropietario' placeholder="Propietario">
              </div>
              <div class="form-group col-md-4">
                <label for="inputSocio">Socio:</label>
                <input value="{{ trim($index->Socio) }}" type="text" class="form-control" id="inputSocio" name ='inputSocio' placeholder="Socio">
                <label for="inputZona">Zona</label>
                <select id="inputZona" name ='inputZona' class="form-control">
                  <option selected>{{ trim($index->Zonas) }}</option>
                  <option>bahia de cata</option>
                  <option>Marico El Que lo lea</option>
                  <option>JUJU maricon</option>
                  <option>Ya basta</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
@endsection