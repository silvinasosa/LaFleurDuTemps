@extends('layouts.app')

@section('title')
  Productos
@endsection

@section('content')

  <div class="container">


      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Productos
              </h1>
              <ol class="breadcrumb">
                  <li><a href="/" style="color:black;">Home</a>
                  </li>
                  <li class="active">Productos</li>
                  @foreach($categories as $category)
                    <li >
                      <a href="/" style="color:black;"> {{$category->name}}</a>
                    </li>
                  @endforeach
              </ol>
          </div>
      </div>


      <div class="row">
      @foreach($products as $product)
        <div class="col-md-4 img-portfolio" style="height:340px;">
            <a href="products/{{$product->id}}">
              @forelse($product->images as $image)
                @if ($loop->first)
                  <img class="img-responsive img-hover img-thumbnail" src="/img/{{$image->src}}"style="height:214px; display:block; margin: 0 auto;">
                @endif
              @empty
                <img class="img-responsive img-hover img-thumbnail" src="/img/noimage.png" style="height:214px; display:block; margin: 0 auto;">
              @endforelse
            </a>
            <h3>
                <a href="products/{{$product->id}}">{{ $product->name }}</a>
            </h3>
            <p> $ {{$product->price }} </p>
          </div>
      @endforeach
    </div>

      <!-- Pagination -->

    {!! $products->render() !!}


      <!-- Footer -->
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; La Fleur du Temps 2017</p>
              </div>
          </div>
      </footer>

  </div>


  <!-- jQuery -->
  <script src="js/jquery.js"></script>


</body>

</html>
@endsection
