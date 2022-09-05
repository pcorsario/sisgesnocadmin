@extends('adminlte::page')
@section('title', 'GestionInventario')

@section('content_header')
    <h1>ISTJ/INDEX</h1>
@stop

@section('content')
<table class="table">

<thead>

  <tr>

    <th scope="col">#</th>

    <th scope="col">Nombre</th>

    <th scope="col">Correo</th>

  </tr>

</thead>

<tbody>

@foreach ($users as $user)

<tr>

    <th scope="row">{{ $user->id }}</th>

    <td>{{ $user->name }}</td>

    <td>{{ $user->email }}</td>

  </tr>

  @endforeach



 

</tbody>

</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop