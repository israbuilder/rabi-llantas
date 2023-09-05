@extends('layouts.app')
@section('title', 'Nosotros')
@section('header')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{url('static/images/contacto-llantas.jpg')}}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Contacto</h2>
            <p>Rabi Llantas y Mecanico cuenta con 3 sucursales para su mayor comodidad, puede venir a cualquiera de nuestras tiendas ó comprar en línea.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{url('/')}}">Inicio</a></li>
          <li>Contacto</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

@endsection

@section('content')


<section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-header">
        <h2>Sucursales</h2>
        <p>Encuentranos en cualquiera de nuestras sucursales</p>
      </div>
      <div class="row">
      <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.5533790838163!2d-100.49442168553755!3d25.686095883671122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866298f3322275dd%3A0x48e3b7ff11d7cbf1!2sRABI%20TIRES!5e0!3m2!1sen!2smx!4v1680665095541!5m2!1sen!2smx" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.1703247136697!2d-100.3609098!3d25.698784099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629672780d5341%3A0xce57437f86e975ae!2sAvante%20Llantas%20y%20Rines!5e0!3m2!1sen!2smx!4v1680665229643!5m2!1sen!2smx" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

      </div>


      <div class="row gx-lg-0 gy-4">
        <div class="col-lg-4 bg-dark">
          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Ubicación Leones:</h4>
                <p>Matehuala #2748, Las Anacuas, Santa Catarina, N.L.</p>   </br>
                <h4>Ubicación Santa Catarina:</h4>
                <p> Paseo de los Leones #1520 , Col. Cumbres 1er sector, Monterrey NL.</p>
              </div>
            </div>
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div><h4>Email:</h4>
              <p>info@rabillantasymecanico.com</p>
            </div>
          </div>
          <div class="info-item d-flex">
             <i class="bi bi-phone flex-shrink-0"></i>
             <div><h4>Llamar:</h4>
             <p>+52 81 1777 5715</p>
            </div>
          </div>
          <div class="info-item d-flex">
             <i class="bi bi-clock flex-shrink-0"></i>
             <div>
              <h4>Horario:</h4>
             <p>Lun-Sab: 9AM - 7PM</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row"><div class="col-md-6 form-group">
             <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
               <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required="">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required="">
            </div>
            <div class="form-group mt-3"><textarea class="form-control" name="message" rows="7" placeholder="Mensaje" required=""></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">Su mensaje fue enviado. Gracias!</div>
          </div>
          <div class="text-center">
            <button type="submit">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



</main>
@endsection

