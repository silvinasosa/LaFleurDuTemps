  <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilostemplate.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Zeyada" rel="stylesheet">
    <link href="/css/css.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css"rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{-- Esto estaba en welcome --}}
    <link rel="stylesheet" href="/assets/css/main.css" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')La Fleur du Temps </title>
    <title>{{ config('app.name', 'La Fleur du Temps') }}</title>

  </head>
  <body>

@include('header.navbar')
@yield('content')
@yield('scripts')
