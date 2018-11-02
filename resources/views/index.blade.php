@extends('layouts.app')

@section('content')

	<h1 class="text-center texts mt-3">Registros</h1>
@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif 
	<div class="container">
    
    <a href="{{ route('index.create') }}" class="btn btn-info mb-3">Insertar registro</a>


		<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Amarre</th>
      <th scope="col">Embarcacion</th>
      <th scope="col">Empleado</th>
      <th scope="col">Pertenece</th>
      <th scope="col">Propietario</th>
      <th scope="col">Socio</th>
      <th scope="col">Zona</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
    
    @foreach($var as $vars)
    <tr>
      <th>{{$vars->id}}</th>
      <td>{{ $vars->Amarre}}</td>
      <td>{{$vars->Embarcacion}}</td>
      <td>{{$vars->Empleados}}</td>
      <td>{{$vars->Pertenece}}</td>
      <td>{{$vars->Propietario}}</td>
      <td>{{$vars->Socio}}</td>
      <td>{{$vars->Zonas}}</td>
      <td><a class="btn btn-info fas fa-edit botoninput" href="{{ route('index.edit', $vars->id) }}"></a>
         <form action="{{ route('index.destroy',$vars->id) }}" method="POST">
                    {{ csrf_field() }}
             {{ method_field('DELETE') }}                     
      
  <button type="submit" class="btn-sm btn-danger mt-2  " onclick="return confirm('Quiere borrar el registro?')" ><i class="far fa-trash-alt botoninput"></i></button>
    </tr>
   
    @endforeach

  </tbody> 

</table>
  {{ $var->links() }}

	</div>


@endsection