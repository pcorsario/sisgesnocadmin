@extends('adminlte::page')
@section('title', 'GestionInventario')

@section('content_header')
    <h1>ISTJ/PRODUCTOS</h1>
@stop

@section('content')
<table class="table">

  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">Nombre</th>

      <th scope="col">Precio</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>

    </tr>

  </thead>

  <tbody>

  @foreach ($productos as $producto)

  <tr>

      <th scope="row">{{ $producto->id }}</th>

      <td>{{ $producto->nombre }}</td>

      <td>{{ $producto->precio }}</td>

      <td><a class="btn btn-primary" href="{{ route('admin-producto.edit', $producto->id)}}">Editar</a></td>

      <td>
      <form action="{{ route('admin-producto.destroy', $producto->id)}}" method="POST">
       @csrf
       @method('DELETE')
        <button class="btn btn-danger" type="submit" onsubmit="return confirm('¿Estás seguro de eliminar ...')">
        Eliminar</button>
      </form>
      </td>
    </tr>

    @endforeach



   

  </tbody>

</table>
{{ $productos->links() }}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop