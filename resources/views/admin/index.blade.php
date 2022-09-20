@extends('adminlte::page')
@section('title', 'GestionInventario')

@section('content_header')
    <h1>ISTJ/INDEX</h1>
@stop

@section('content')
Productos: {{$tpro}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop