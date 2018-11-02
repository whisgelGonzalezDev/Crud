@extends('layouts.app')

@section('content')
<?php 
$variable = 'yo'

//$data = 123;
;?>
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

		<form action="{{route('index.store') }}" method="POST">
			 {{ csrf_field() }}
			@if(!isset ($data))

			<div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputAmarre">Amarre</label>
			    <input   type="number" class="form-control" id="inputAmarre" name='inputAmarre' placeholder="Amarre">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputEmbarcacion">Embarcacion</label>
			    <input type="text" class="form-control" id="inputEmbarcacion" name='inputEmbarcacion' placeholder="Embarcacion">
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmpleados">Empleados</label>
			  <input type="text" class="form-control" id="inputEmpleados"  name ='inputEmpleados' placeholder="Empleados">
			</div>
			<div class="form-group">
			  <label for="inputPertenece">Pertenece </label>
			  <input type="text" class="form-control" id="inputPertenece" name ='inputPertenece' placeholder="Pertenece">
			</div>
			<div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputPropietario">Propietario</label>
			    <input type="text" class="form-control" id="inputPropietario" name ='inputPropietario' placeholder="Propietario">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="inputSocio">Socio</label>
			    <input type="text" class="form-control" id="inputSocio" name ='inputSocio' placeholder="Socio">
			    <label for="inputZona">Zona</label>
			    <select id="inputZona" name ='inputZona' class="form-control">
			      <option selected>Seleccione una zona</option>
			      <option>bahia de cata</option>
			      <option>Marico El Que lo lea</option>
			      <option>JUJU maricon</option>
			      <option>Ya basta</option>
			    </select>
			  </div>
			  <!-- <div class="form-group col-md-2">
			    <label for="inputZip">Zip</label>
			    <input type="text" class="form-control" id="inputZip">
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-check">
			    <input class="form-check-input" type="checkbox" id="gridCheck">
			    <label class="form-check-label" for="gridCheck">
			      Check me out
			    </label>
			  </div>
			</div> -->
			@else
						<div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputAmarre">Amarre</label>
			    <input  value="{{ $data['inputAmarre'] }}"  type="number" class="form-control" id="inputAmarre" name='inputAmarre' placeholder="Amarre">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputEmbarcacion">Embarcacion</label>
			    <input value="{{ $data['inputEmbarcacion'] }}" type="text" class="form-control" id="inputEmbarcacion" name='inputEmbarcacion' placeholder="Embarcacion">
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmpleados">Empleados</label>
			  <input value="{{ $data['inputEmpleados'] }}" type="text" class="form-control" id="inputEmpleados"  name ='inputEmpleados' placeholder="Empleados">
			</div>
			<div class="form-group">
			  <label for="inputPertenece">Pertenece </label>
			  <input value="{{ $data['inputPertenece'] }}" type="text" class="form-control" id="inputPertenece" name ='inputPertenece' placeholder="Pertenece">
			</div>
			<div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputPropietario">Propietario</label>
			    <input value="{{ $data['inputPropietario'] }}" type="text" class="form-control" id="inputPropietario" name ='inputPropietario' placeholder="Propietario">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="inputSocio">Socio</label>
			    <input value="{{ $data['inputSocio'] }}" type="text" class="form-control" id="inputSocio" name ='inputSocio' placeholder="Socio">
			    <label for="inputZona">Zona</label>
			    <select  id="inputZona" name ='inputZona' class="form-control">
			      <option selected>{{ $data['inputZona'] }}</option>
			      <option>bahia de cata</option>
			      <option>Marico El Que lo lea</option>
			      <option>JUJU maricon</option>
			      <option>Ya basta</option>
			    </select>
			  </div>
			@endif
			<button type="submit" class="btn btn-primary">Registrar</button>
		</form>


	</div>


@endsection

