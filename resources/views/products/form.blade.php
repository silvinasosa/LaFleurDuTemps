@extends('layouts.app')

@section('content')
<div class="container">
  <form action="\products" method="POST" class="form-horizontal">
    {{ csrf_field()}}
    {{ method_field('post')}}

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" name="name" value="{{ old('name')}}" class="form-control"></input>
    </div>

    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" value="{{ old('slug')}}" class="form-control"></input>
    </div>

    <div class="form-group">
      <label for="price">Precio</label>
      <input type="text" name="price" value="{{ old('price')}}" class="form-control"></input>
    </div>

    <div class="form-group">
      <label for="description">Descripción</label>
      <textarea name="description" row="10" class="form-control">{{ old('description')}}</textarea>
    </div>

    {{-- <div class="form-group">
      <label for="category_id">Categoría</label>
      <select name="category_id" class="form-control">
        @foreach($categories as $category)
        <option value="{{ $category->id}}">{{ $category->value}}</option>
        @endforeach
      </select>
    </div> --}}


    </div>


    <div>dropzone
    </div>

    <div>imagen
    </div>


    <div class="form-group">
      <input type="submit" name="enviar" class="btn btn-primary"></input>
    </div>



  </form>
</div>
@endsection
