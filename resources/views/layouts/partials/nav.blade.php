<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <!--<a class="navbar-brand" href="#">Responsive offcanvas navbar</a>-->
      <a href="" class="logo me-auto"><img height="60px" style="height:80px !important" src="{{ url('static/images/logo-llantas-monterrey.png')}}" alt="" class="img-fluid" loading="lazy"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Rabi Llantas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/llantas')}}">Llantas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/servicios')}}">Servicios</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" style="color:#fff" href="tel:8117775715">8117775715</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/blog')}}">Blog</a>
            </li>
                <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
           </li>
           <li class="nav-item"><a class="nav-link getstarted scrollto" href="https://wa.me/5218117775715">Agendar Servicio</a></li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
