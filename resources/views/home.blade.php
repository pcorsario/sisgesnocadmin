@extends('layouts.app')

@section('content')

<div class="container">
<!-- He sacado la tabla de este apartado por estetica -->
    <div class="row justify-content">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   Total de Productos: {{$totalproductos}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>Proyecto de control de productos del instituto Japon</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
