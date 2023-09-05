@extends('layouts.app')
@section('title', 'Nosotros')
@section('header')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{url('static/images/llantas-llantas.jpg')}}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Llantas</h2>
            <p>Rabi Llantas y Mecanico tiene una amplia variedad de llantas para Auto, Auto Deportivo, Camioneta y llantas para Lodo.</p>
          </div>


        </div>
        @include("layouts.partials.search") ?>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{url('/')}}">Inicio</a></li>
          <li>Llantas</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

@endsection

@section('content')

<div class="container">
    <div class="row mb-2 gx-0">

    <div class="container px-4 py-5" id="custom-cards">

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
          <a href="{{url('llantas-para-auto')}}">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{url('static/images/llantas-monterrey.jpg')}}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Llantas para auto </h3>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="{{url('static/images/llantas-en-monterrey.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                  </li>
                  <li class="d-flex align-items-center me-3">
                  <div class="icon"><i class="bi bi-currency-dollar text-white fs-3"></i></div>
                    <small>Desde $1950 x 2 pz</small>
                  </li>
                  <li class="d-flex align-items-center">
                  <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                    <small>Jetta, Versa, Vento</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
          </div>

          <div class="col">
          <a href="{{url('llantas-para-camioneta')}}">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{url('static/images/llantas-camioneta.jpg')}}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Llantas para camioneta</h3>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="{{url('static/images/llantas-camioneta.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                  </li>
                  <li class="d-flex align-items-center me-3">
                  <div class="icon"><i class="bi bi-currency-dollar text-white fs-3"></i></div>
                    <small>Desde $2900 x 2 pz </small>
                  </li>
                  <li class="d-flex align-items-center">
                  <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                    <small>Pick up, Van, Mini van</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
          </div>

          <div class="col">
          <a href="{{url('llantas-para-lodo')}}">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg img-fluid" style="background-image: url('{{url('static/images/llantas-para-lodo-todo-terreno-mud-terrain.jpg')}}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Llantas para lodo</h3>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="{{url('static/images/llantas-para-lodo-todo-terreno-mud-terrain.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                  </li>
                  <li class="d-flex align-items-center me-3">
                  <div class="icon"><i class="bi bi-currency-dollar text-white fs-3" style=""></i></div>
                    <small>Desde $3600 x 2 pz</small>
                  </li>
                  <li class="d-flex align-items-center">
                  <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                    <small>Lodo, todo terreno, mod terrain</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
          </div>

          <div class="col">
          <a href="{{url('llantas-para-auto-deportivo')}}">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg img-fluid" style="background-image: url('{{url('static/images/llantas-autos-deportivos.jpg')}}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Llantas para auto deportivo</h3>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="{{url('static/images/llantas-autos-deportivos.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                  </li>
                  <li class="d-flex align-items-center me-3">
                  <div class="icon"><i class="bi bi-currency-dollar text-white fs-3" style=""></i></div>
                    <small>Desde $3600 x 2 pz</small>
                  </li>
                  <li class="d-flex align-items-center">
                  <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                    <small>deportivos, rines, autos de lujo</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
          </div>

        </div>
        </div>

        </main>
@endsection

