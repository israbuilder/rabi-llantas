@extends('layouts.app')
@section('title', 'Nosotros')
@section('header')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{('static/images/nosotros-llantas.jpg')}}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Nosotros</h2>
            <p>Rabi Llantas y Mecanico tiene mas de 10 años de experiencia en el negocio de llantas y Mecánica Express.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="">Inicio</a></li>
          <li>Nosotros</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

@endsection

@section('content')

<div class="container marketing mt-5">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="{{url('static/images/mision.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2 class="fw-normal">Misión</h2>
        <p class="text-dark">Nuestra misión es asegurarnos de la segurid de los autos de nuestros clientes atravez dellantas nuevas reparación de rines y mecánica express.</p>
        <p><a class="btn btn-danger" style="background-color:#c54531 !important" href="https://wa.me/5218117775715">Contactarnos &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{url('static/images/vision.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2 class="fw-normal">Visión</h2>
        <p class="text-dark">Nuestra visión es dar simpre el máximo servicio de excelencia ponendo al frente siempre al cliente.</p>
        <p><a class="btn btn-danger" style="background-color:#c54531 !important" href="https://wa.me/5218117775715">Contactarnos &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{url('static/images/objetivos.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2 class="fw-normal">Objetivos</h2>
        <p class="text-dark">Mantener alta calidad y romper los esquemas en los servicios mecánicos atravez de herramientas de contacto con nuestros clientes.</p>
        <p><a class="btn btn-danger" style="background-color:#c54531 !important" href="https://wa.me/5218117775715">Contactarnos&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Venta de Llantas. <span style="color:#c54531 !important">en Monterrey.</span></h2>
        <p class="lead text-dark">Puede buscar llantas para auto, llantas para auto deportivo, llantas para camioneta y llantas para lodo ó llantas para todo terreno (llantas mud terrain).</p>
      </div>
      <div class="col-md-5">
        <img src="{{url('static/images/llantas-en-monterrey-apodaca.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Reparación de Rines. <span style="color:#c54531 !important">en Monterrey.</span></h2>
        <p class="lead text-dark">Se te daño el rin? nosotros lo reparamos. Te tenemos cubierto en cuanto a la reparación de rines en Monterrey.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{url('static/images/reparacion-de-rines.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Mecánica en General. <span style="color:#c54531 !important">en Moterrey.</span></h2>
        <p class="lead text-dark">Cambio de Aceite, Afinación, Reparación de Frenos, Suspenciones, Amortiguadores.</p>
      </div>
      <div class="col-md-5">
        <img src="{{url('static/images/mecanica-en-general.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->



</main>
@endsection

