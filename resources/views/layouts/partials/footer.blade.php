
<a href="https://wa.me/5218117775715"
style="justify-content:center;color:#fff !important;align-items:center;display:flex;position:fixed;bottom:20px;right:12px;width:190px;height:40px;border-radius:12px;background-color: #5bbe54;text-decoration:none;"><i class="bi bi-whatsapp" style="margin-right: 5px;"></i>Envíanos un Mensaje</a>


<footer id="footer" class="footer" >

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="" class="logo d-flex align-items-center">
            <img src="{{url('static/images/logo-llantas-monterrey.png')}}" alt="llantas monterrey" loading="lazy">

            </a>
            <p style="color:#313131">Para la facturación en su compra en línea porfavor póngase en contacto con nostros a travez de una llamada telefónica o por WhatsApp.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 style="color:#313131">Enlaces de Interes</h4>
            <ul>
            <li><i class="bi bi-chevron-right"></i>  <a style="color:#313131" href="{{url('')}}">Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a style="color:#313131"  href="{{url('servicios')}}">Servicios</a></li>
              <li><i class="bi bi-chevron-right"></i>  <a style="color:#313131" href="{{url('llantas')}}">Llantas</a></li>
              <li><i class="bi bi-chevron-right"></i>  <a style="color:#313131" href="{{url('blog')}}">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a style="color:#313131" href="{{url('contacto')}}">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 style="color:#313131">Llantas en Monterrey</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i>  <a style="color:#313131" href="{{url('llantas-para-auto')}}">Llantas para Auto</a></li>
              <li><i class="bi bi-chevron-right"></i> <a style="color:#313131" href="{{url('llantas-para-lodo')}}">Llantas para Lodo</a></li>
              <li><i class="bi bi-chevron-right"></i>  <a style="color:#313131" href="{{url('llantas-para-auto-deportivo')}}">Llantas para Deportivo</a></li>
              <li><i class="bi bi-chevron-right"></i>  <a style="color:#313131" href="{{url('llantas-para-camioneta')}}">llantas para Camioneta</a></li>
              <li><i class="bi bi-chevron-right"></i> <a style="color:#313131" href="{{url('llantas')}}">Llantas Monterrey</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4 style="color:#313131">Sucursales</h4>
            <p style="color:#313131">
            Paseo de los Leones #1520 <br>
            Col. Cumbres 1er sector MTY. NL. <br>
            C.P. 64610 Monterrey México <br>
              <strong style="color:#313131">Tel:</strong> <a style="color:#313131;text-decoration:none" href="tel:8117775715">8117775715</a><br>
              <strong style="color:#313131">WhatsApp:</strong> <a style="color:#313131;text-decoration:none" href="https://wa.me/5218117775715">81 1777 5715</a><br>
            </p>

            <p style="color:#313131">
            Matehuala #2748 <br>
            Las Anacuas, Santa Catarina, N.L. <br>
            C.P. 66359 Monterrey México <br>
              <strong style="color:#313131">Tel:</strong> <a style="color:#313131;text-decoration:none" href="tel:8117775715">8117775715</a><br>
              <strong style="color:#313131">WhatsApp:</strong> <a style="color:#313131;text-decoration:none" href="https://wa.me/5218117775715">81 1777 5715</a><br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container mb-5">
      <div class="copyright">
        © Copyright &copy;  <strong><span>Rabi llantas</span></strong>. Todos Los Derechos Reservados
      </div>
      <div class="credits">

          Diseñado por <a style="text-decoration:none" href="https://xencar.mx">Páginas Web Monterrey</a>
      </div>
    </div>
  </footer>
</div>

<script src="{{url('static/js/ajax.js')}}"></script>

<script src="{{url('static/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('static/vendor/glightbox/js/glightbox.js')}}"></script>

<script>
            var lightbox = GLightbox();
            lightbox.on('open', (target) => {
                console.log('lightbox opened');
            });
            var lightboxDescription = GLightbox({
                selector: '.glightbox2'
            });
            var lightboxVideo = GLightbox({
                selector: '.glightbox3'
            });
            lightboxVideo.on('slide_changed', ({ prev, current }) => {
                console.log('Prev slide', prev);
                console.log('Current slide', current);

                const { slideIndex, slideNode, slideConfig, player } = current;

                if (player) {
                    if (!player.ready) {
                        // If player is not ready
                        player.on('ready', (event) => {
                            // Do something when video is ready
                        });
                    }

                    player.on('play', (event) => {
                        console.log('Started play');
                    });

                    player.on('volumechange', (event) => {
                        console.log('Volume change');
                    });

                    player.on('ended', (event) => {
                        console.log('Video ended');
                    });
                }
            });

            var lightboxInlineIframe = GLightbox({
                selector: '.glightbox4'
            });

            /* var exampleApi = GLightbox({ selector: null });
            exampleApi.insertSlide({
                href: 'https://picsum.photos/1200/800',
            });
            exampleApi.insertSlide({
                width: '500px',
                content: '<p>Example</p>'
            });
            exampleApi.insertSlide({
                href: 'https://www.youtube.com/watch?v=WzqrwPhXmew',
            });
            exampleApi.insertSlide({
                width: '200vw',
                content: document.getElementById('inline-example')
            });
            exampleApi.open(); */
        </script>

