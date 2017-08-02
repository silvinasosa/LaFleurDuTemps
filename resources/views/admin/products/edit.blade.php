@extends('layouts.app')

@if (Auth::check())

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar un Producto</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="\admin\products">
                        {{ csrf_field() }}


                        <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Nombre del Producto</label>
                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="category_id" class="col-md-4 control-label">Categoría</label>
                          <div class="col-md-6">
                          <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->value}}</option>
                            @endforeach
                          </select>
                        </div>
                        </div>

                        <div class="form-group">
                          <label for="description" class="col-md-4 control-label">Descripción</label>
                          <div class="col-md-6">
                          <textarea id="description" row="10" class="form-control" value= "{{ old('description')}}" required autofocus></textarea>
                        </div>
                        </div>

                        <div class="form-group">
                          <label for="price" class="col-md-4 control-label">Precio</label>
                          <div class="col-md-6">
                          <input type="text" name="price" value="{{ old('price')}}" class="form-control"></input>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="price" class="col-md-4 control-label">¿Imágen?</label>
                          <div class="col-md-6">
                          <input type="text" name="price" value="{{ old('price')}}" class="form-control"></input>
                          </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@elseif ($condition)





@endif


@endsection




{{--QUE ONDA ESTO?

    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" value="{{ old('slug')}}" class="form-control"></input>
    </div>



<form class="" action="{{ route('create') }}" method="post">


</form>


 --}}
