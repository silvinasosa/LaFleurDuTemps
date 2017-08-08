@extends('layouts.app')

@section('titulo')
  Perfil
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
<h1>Mi cuenta</h1>
    </div>
      <div class="container">
        <table class="table table-bordered">
          <thead>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>E-Mail</td>
                <td class="text-center">Acciones</td>
              </tr>
            </thead>
          <tbody>

            {{-- @foreach ($users as $user) --}}
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $product->email }}</td>
                <td class="text-center">
                  <a href="/auth/{{ $user->id }}/edit-user" class="btn btn-primary">Editar<i class="fa fa-pencil"></i></a>
                  <form method="POST" action="/auth/{{ $user->id }}/edit-user" style="display: inline-block;">
                    {{ csrf_field() }}
                  </form>
                </td>
              </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>

@endsection
