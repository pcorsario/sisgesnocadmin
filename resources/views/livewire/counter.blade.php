<div style="text-align: center">
<table class="table">

  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">Nombre</th>

      <th scope="col">Precio</th>

    </tr>

  </thead>

  <tbody>

  @foreach ($productos as $producto)

  <tr>

      <th scope="row">{{ $producto->id }}</th>

      <td>{{ $producto->nombre }}</td>

      <td>{{ $producto->precio }}</td>

    </tr>

    @endforeach



   

  </tbody>

</table>
{{ $productos->links() }}
</div>