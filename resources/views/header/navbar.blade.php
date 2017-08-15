@extends('layouts.app')

@section('content')
<header>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header " style="">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="color:black; font-family:'Zeyada', cursive; font-size: 30px;"> La Fleur de Temps</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="article/index" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">Productos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('products')}}">Sountiens</a>
                        </li>
                        <li>
                            <a href="{{url('products')}}">Culottes</a>
                        </li>
                        <li>
                            <a href="{{url('products')}}">Panties</a>
                        </li>
                        <li>
                            <a href="{{url('products')}}">Conjuntos</a>
                        </li>
                        <li>
                            <a href="{{url('products')}}">Bodysuits</a>
                        </li>
                        <li>
                            <a href="{{url('products')}}">Batas</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" style="color:black;">Boutique</a>
                </li>

                <li>
                  <a href="faq"style="color:black;">FAQ</a>
                </li>

              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ route('login') }}"style="color:black;">Login</a></li>
                      <li><a href="{{ route('register') }}"style="color:black;">Registro</a></li>

                  @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle"data-toggle="dropdown" style="color:black;">
                               <!-- alt="" class="img-circle" style="height: 30px; display:inline-block;"  -->
                              Bonjour {{ Auth::user()->name }}
                              <img class="img-circle" height="25px" width="25px" style="display: inline-block;"src="/img/flowerpower.jpg"/>
                              <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="profile">Mi cuenta</a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Au revoir!
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
              </div>
              <!-- /.container -->
              </nav>
          @endif
</header>
<!-- jQuery -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
