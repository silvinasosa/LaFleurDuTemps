@extends('layouts.app')

@section('titulo')
  {{$product->name}}
@endsection

@section('content')
  <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">{{$product->name}}
              </h1>
              <ol class="breadcrumb">
                  <li><a href="/">Home</a>
                  </li>
                  <li><a href="/">{{$product->category->name}}</a></li>
                  <li class="active">{{$product->name}}</li>
              </ol>
          </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Item Row -->
      <div class="row">

          {{-- <div class="col-md-8">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> --}}
                  <!-- Indicators -->
                  <!--<ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol> -->

                  <!-- Wrapper for slides -->
                  {{-- <div class="carousel-inner"> --}}
                    {{-- <div class="item active">
                      <img class="img-responsive" src="/img/{{$image->src}}" style="height:550px;" alt="">
                    </div> --}}
                      @forelse($product->images as $image)

                        <div class="item">
                          <img class="img-responsive"  src="/img/{{$image->src}}" style="height:100%; margin:0 auto;" alt="">
                        </div>
                      @empty
                      <div class="item active">
                        <img class="img-responsive" src="/img/noimage.png" style="width:100%;" alt="">
                      </div>
                      @endforelse
                  </div>
                  {{-- <script>
                  $( document ).ready(function() {
                    $(".carousel-inner div").first().addClass("item active");
                  });
                  </script> --}}

                  <!-- Controls -->
                  {{-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                  </a> --}}
              </div>


          <div class="col-md-4">
              <h3>{{$product->name}}</h3>
              <p>{{$product->description}}</p>
              <h2>${{$product->price}}</h2>
              <p>
                <a href="#" class="btn btn-success">Agregar al Carrito</a>
              </p>
          </div>

      </div>
      <!-- /.row -->
</div>
<div class="row">
  <br><br>
</div>
@if (Auth::id()==$product->user_id)
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form action="/products/{{$product->id}} "method="post" accept-charset="UTF-8" enctype="multipart/form-data">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label class="col-md-4 control-label">Cargar Imagen</label>
          <br>
          <div class="col-md-6 text-center">
            <input type="file" name="file"></input>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>

        {{-- {{ csrf_field() }} --}}

          {{-- <input name="file" type="file" multiple></input> --}}

      </form>
    </div>
  </div>
  <div class="row">
    <br>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <a class="btn btn-lg btn-default btn-block" href="/products/{{$product->id}}/edit">Editar/eliminar producto</a>
    </div>
    <div class="col-md-4 col-md-offset-4 text-center">
    <a href="/products">Volver al Panel de Productos</a>
    </div>
  </div>
@endif


      <!-- Footer -->
      <footer>
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <p>Copyright &copy; La Fleur du Temps 2017</p>
              </div>
          </div>
      </footer>
  </div>
  <!-- /.container -->

</body>

</html>
@endsection
{{-- @section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection --}}
