@extends('layouts.app')

@section('content')

<div class="big-padding text-center blue-grey white-text">
<h1>Productos</h1>
    </div>
      <div class="container">
        <table class="table table-bordered">
          <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Descripción</td>
                <td>Precio</td>
                <td>Categoría</td>
                <td class="text-right">Acciones</td>
              </tr>
            </thead>
          <tbody>

            @forelse ($products as $product)
              <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
                <td class="text-right">
                  <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-primary">Editar<i class="fa fa-pencil"></i></a>
                  <form method="POST" action="/admin/products/{{ $product->id }}/edit" style="display: inline-block;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" value="submit" class="btn btn-danger">Eliminar<i class="fa fa-trash"></i></button>
                </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5">No hay productos cargados</td>
              </tr>
            @endforelse

          </tbody>
        </table>

@endsection
