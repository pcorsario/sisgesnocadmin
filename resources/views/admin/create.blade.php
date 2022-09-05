@extends('adminlte::page')
@section('title', 'GestionInventario')

@section('content_header')
    <h1>ISTJ/CREATE</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="position-relative">
  <img src="../../dist/img/photo1.png" alt="Photo 1" class="img-fluid">
  <div class="ribbon-wrapper ribbon-lg">
    <div class="ribbon bg-success text-lg">
      Ribbon
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop