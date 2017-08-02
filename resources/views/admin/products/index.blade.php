@extends('layouts.app')

{{-- @section('title', 'Productos')

@stop --}}

@section('content')

  <div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
                <tr><td>Nombre</td></tr>
                <tr><td>Categoría</td></tr>
                <tr><td>Precio</td></tr>
            </thead>
            <tbody>

            @forelse ($products as $product)
              <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->value }}</td>
                <td>{{ $product->price }}</td>
                <td class="text-right">
                  <a href="/admin/products/{{ $product-id }}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                  <form method="POST" action="/admin/products/{{ $product-id }}" style="display: inline-block;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" value="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
      </div>
    </div>
  </div>

@endsection
