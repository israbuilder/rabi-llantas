<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <meta name="description" content="@yield('description')">
        <meta name="content" content="@yield('contenido')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="autor" content="IsraBuilder - Xencar.mx" />

      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="rabillantasymecanico.com">
      <meta name="twitter:title" content="@yield('title')">
      <meta name="twitter:description" content="@yield('description')">
      <meta name="twitter:creator" content="IsraBuilder - Xencar.mx">
      <meta name="twitter:image" content="{{ url('/static/images/facebook.jpg') }}">

      <meta property="og:site_name" content="@yield('title')" />
      <meta property="og:url" content="rabillantasymecanico.com" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:type" content="website" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:image" content="{{ url('static/images/facebook.jpg')}}" />
      <meta property="og:image:width" content="1024" />
      <meta property="og:image:height" content="538" />

      <link rel="apple-touch-icon" sizes="57x57" href="{{ url('static/images/favicon/apple-icon-57x57.png')}}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{ url('static/images/favicon/apple-icon-60x60.png')}}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ url('static/images/favicon/apple-icon-72x72.png')}}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ url('static/images/favicon/apple-icon-76x76.png')}}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ url('static/images/favicon/apple-icon-114x114.png')}}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{ url('static/images/favicon/apple-icon-120x120.png')}}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{ url('static/images/favicon/apple-icon-144x144.png')}}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{ url('static/images/favicon/apple-icon-152x152.png')}}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ url('static/images/favicon/apple-icon-180x180.png')}}">
      <link rel="icon" type="image/png" sizes="192x192" href="{{ url('static/images/favicon/android-icon-192x192.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ url('static/images/favicon/favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="96x96" href="{{ url('static/images/favicon/favicon-96x96.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ url('static/images/favicon/favicon-16x16.png')}}">
      <meta name="msapplication-config" content="{{ url('static/images/favicon/browserconfig.xml')}}" />
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="{{ url('static/images/favicon/ms-icon-144x144.png')}}">
      <meta name="theme-color" content="#ffffff">
      <Link rel="shortcut icon" href="{{ url('static/images/favicon.ico')}}" />



        <!-- Favicons -->
        <link href="{{ url('static/images/favicon.png')}}" rel="icon">

        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <link rel='dns-prefetch' href='//s.w.org' />
      <link href="{{url('static/css/style.css')}}" rel="stylesheet">
      <link href="{{ url('static/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ url('static/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{ url('static/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    @include('layouts.partials.nav')


    <body class="bg-gray-100">
        @yield('body')

        @livewireScripts

    </body>
</html>
