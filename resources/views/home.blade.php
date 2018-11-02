@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has ingresado correctamente     <br>  
                    <a href="{{ route('index.index') }}" class="btn btn-info mt-5  ">Ver Registros</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
