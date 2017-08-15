@extends('layouts.app')

@section('content')
  <div class="container">

      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header"> Perfil </h1>
          </div>
      </div>


          <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="col-md-8 col-md-offset-1">
                        <img src="/img/flowerpower.jpg" style="height:256px; display:block; margin: 0 auto;" alt="">
                        <p class="lead">Datos Personales</p>
                        <p><strong>Nombre:</strong> {{Auth::user()->name}}</p>
                        <p><strong>Apellido:</strong> {{Auth::user()->lastname}}</p>
                        <p><strong>Email:</strong> {{Auth::user()->email}}</p>
                        <p><strong>Teléfono:</strong> {{Auth::user()->tel}}</p>
                      </div>
                      <div class="col-md-12">
                      </div>
                    </div>
                </div>
            </div>

              <div class="col-md-5">
                  <h3>Mis compras</h3>
                <div class="panel panel-default">
              </div>
                </div>
            </div>
        </div>

{{-- @if (Auth::id()==$user->user_id) --}}
        <div class="panel-body text-center">
          <a href="/products" style= "color: black;">Ver Productos Cargados</a>
        </div>


        <div class="panel-body text-center">
          <a href="/products/create" style= "color: black;">Cargar un Producto!</a>
        </div>
{{-- @endif --}}
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>Copyright &copy; La Fleur du Temps 2017</p>
                </div>
            </div>
        </footer>
    </div>

  </body>

  </html>

@endsection
