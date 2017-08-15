@extends('layouts.app')

{{-- @if (Auth::check())
@else
   return redirect::to('/');
@endif --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar un Producto</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/products/{{$product->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}


                        <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Nombre del Producto</label>
                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus></input>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="category_id" class="col-md-4 control-label">Categoría</label>
                          <div class="col-md-6">
                          <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                              @php $selected = ($category->id == $product->category_id)?'selected':'' @endphp
                              <option value="{{ $category->id }}" {{$selected}}>{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                        <div class="form-group">
                          <label for="slug" class="col-md-4 control-label">Slug</label>
                          <div class="col-md-6">
                          <input type="text" name="slug" value="{{ $product->slug }}" class="form-control"></input>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="description" class="col-md-4 control-label">Descripción</label>
                          <div class="col-md-6">
                          <textarea id="description" row="10" class="form-control" name="description">{{ $product->description }}</textarea>
                        </div>
                        </div>

                        <div class="form-group">
                          <label for="price" class="col-md-4 control-label">Precio</label>
                          <div class="col-md-6">
                          <input type="text" name="price" value="{{ $product->price }}" class="form-control"></input>
                          </div>
                        </div>

                        {{-- <div class="form-group">
                          <label for="image" class="col-md-4 control-label">Imágen</label>
                          <div class="col-md-6">
                          <input type="file" name="image" value="{{ $product->image }}" class="form-control"></input>
                          </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </form>
                          <form action="/products/{{$product->id}}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                          <div class="form-group">
                            <input type="submit" name="Enviar"  value="Eliminar producto"  class="btn btn-danger">
                          </div>
                        </form>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <a href="/products">Volver al Panel de Productos</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
