@extends('layouts.app')
@section('title', 'Nosotros')
@section('header')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{('static/images/servicios-llantas.jpg')}}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Servicios</h2>
              <p>Ofrecemos venta de llantas de auto, camioneta y camiones, así como también servicio de mecánica general y reparación de rines.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="">Inicio</a></li>
          <li>Servicios</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

@endsection

@section('content')


<div class="container px-4 py-5" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
      <a href="{{url('llantas')}}">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{url('static/images/llantas-monterrey.jpg')}}');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Venta de Llantas </h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="{{url('static/images/llantas-en-monterrey.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
              <div class="icon"><i class="bi bi-currency-dollar text-white fs-3"></i></div>
                <small>Desde $1200 x 2 pz</small>
              </li>
              <li class="d-flex align-items-center">
              <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                <small>Wolkswagen, Nissan, Ford</small>
              </li>
            </ul>
          </div>
        </div>
      </a>
      </div>

      <div class="col">
      <a href="{{url('reparacion-de-rines')}}">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{url('static/images/reparacion-de-rines.jpg')}}');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Reparación de Rines</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="{{url('static/images/reparacion-de-rines.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
              <div class="icon"><i class="bi bi-currency-dollar text-white fs-3"></i></div>
                <small>Desde $1000 </small>
              </li>
              <li class="d-flex align-items-center">
              <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                <small>rines de Auto, rines de camioneta, rines de auto deportivo</small>
              </li>
            </ul>
          </div>
        </div>
      </a>
      </div>

      <div class="col">
      <a href="{{url('mecanica-general')}}">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg img-fluid" style="background-image: url('{{url('static/images/mecanica-en-general.jpg')}}');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Mecánica en General</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="{{url('static/images/mecanica-en-general.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
              <div class="icon"><i class="bi bi-currency-dollar text-white fs-3" style=""></i></div>
                <small>A cotizar</small>
              </li>
              <li class="d-flex align-items-center">
              <div class="icon"><i class="bi bi-geo-fill text-white fs-3"></i></div>
                <small>Afinación, Suspención, Amortiguadores, Frenos, Cambio de Aceite</small>
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

