@extends('layouts.app')

@section('titulo')
  {{ $product->name }}
@endsection

@section('content')

<div class="container text-center">
  <div class="card product text-left">
      <h1>{{ $product->name }}</h1>
      <div class="row">
        <div class="col-sm-6 col-xs-12"></div>
          <div class="col-sm-6 col-xs-12">
            <p><strong>Description</strong></p>
            <p>
              {{ $product->description }}
            </p>
            <p>
              <a href="#" class="btn btn-success">Agregar al Carrito</a>
            </p>
        </div>





      </div>

  </div>

</div>




@endsection
