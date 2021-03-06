<?php include('header.php'); ?>

<!DOCTYPE html>

<section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/glamista/baner_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/glamista/baner_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/glamista/baner_3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<script>
$('.carousel').carousel({
  interval: 2000
})
</script>
<!-- esto es una prueba looooool BAD BUNE-->
  <!--================ Hero banner start =================-->

    <!--================ Hero banner start =================-->


	<!--================ End Header Menu Area =================-->





    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-5">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/glamista/C0023.jpg" alt="C0023" class="img-fluid"  width="250px" height="250px">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>CADENAS Y COLLARES</h3>
            <p>CADENA COMBINADA</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/glamista/P0072.jpg" alt="P0072" class="img-fluid" width="250px" height="250px">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>PULSERAS</h3>
            <p>DUO BRAZALETES VERDE MENTA</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/glamista/R0002.jpg" alt="R0002" class="img-fluid" width="250px" height="250px">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>ANILLOS</h3>
            <p>MEDIA LUNA</p>
          </a>
        </div>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Glamista Store</p>
          <h2><span class="section-intro__style">Tendencias</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/glamista/TENDENCIAS_A0021.jpg" alt="TENDENCIAS_A0021">
                <ul class="card-product__imgOverlay">
                <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>ARETES</p>
                <h4 class="card-product__title"><a href="single-product.php">SOLES</a></h4>
                <p class="card-product__price">$39.990</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/glamista/TENDENCIAS_C0006.jpg" alt="TENDENCIAS_C0006">
                <ul class="card-product__imgOverlay">
                <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>CADENAS Y COLLARES</p>
                <h4 class="card-product__title"><a href="single-product.php">LOVE</a></h4>
                <p class="card-product__price">$15.990</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/glamista/TENDENCIAS_J0008.jpg" alt="TENDENCIAS_J0008">
                <ul class="card-product__imgOverlay">
                <li><button><i class="ti-shopping-cart"></i></button></li>

                </ul>
              </div>
              <div class="card-body">
                <p>JUEGOS</p>
                <h4 class="card-product__title"><a href="single-product.php">ANCLA</a></h4>
                <p class="card-product__price">$19.990</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/glamista/TENDENCIAS_P0056.jpg" alt="TENDENCIAS_P0056">
                <ul class="card-product__imgOverlay">
                <li><button><i class="ti-shopping-cart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>PULSERAS</p>
                <h4 class="card-product__title"><a href="single-product.php">CIERRE DE IMÁN</a></h4>
                <p class="card-product__price">$19.990</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->



    <!-- ================ offer section end ================= -->

    <!-- ================ Best Selling item  carousel ================= -->
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Lo más vendidos para detalles</p>
          <h2>Mejores <span class="section-intro__style">Regalos</span></h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="img/glamista/mejores-regalos_A0036.jpg" alt="mejores-regalos_A0036">
              <ul class="card-product__imgOverlay">
              <li><button><i class="ti-shopping-cart"></i></button></li>

              </ul>
            </div>
            <div class="card-body">
              <p>ARETES</p>
              <h4 class="card-product__title"><a href="single-product.php">PRIMAVERA</a></h4>
              <p class="card-product__price">$37.990</p>
            </div>
          </div>

          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="img/glamista/mejores-regalos_E0004.jpg" alt="mejores-regalos_E0004">
              <ul class="card-product__imgOverlay">
              <li><button><i class="ti-shopping-cart"></i></button></li>

              </ul>
            </div>
            <div class="card-body">
              <p>HEBILLAS</p>
              <h4 class="card-product__title"><a href="single-product.php">LINEA DE PERLAS</a></h4>
              <p class="card-product__price">$8.990</p>
            </div>
          </div>

          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="img/glamista/mejores-regalos_J0012.jpg" alt="mejores-regalos_J0012">
              <ul class="card-product__imgOverlay">
              <li><button><i class="ti-shopping-cart"></i></button></li>

              </ul>
            </div>
            <div class="card-body">
              <p>JUEGOS</p>
              <h4 class="card-product__title"><a href="single-product.php">COPO DE NIEVE</a></h4>
              <p class="card-product__price">$19.990</p>
            </div>
          </div>

          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="img/glamista/mejores-regalos_R0001.jpg" alt="/mejores-regalos_R0001">
              <ul class="card-product__imgOverlay">
              <li><button><i class="ti-shopping-cart"></i></button></li>

              </ul>
            </div>
            <div class="card-body">
              <p>ANILLOS</p>
              <h4 class="card-product__title"><a href="single-product.php">BOA</a></h4>
              <p class="card-product__price">$34.990</p>
            </div>
          </div>

          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="img/glamista/mejores-regalos_A0035.jpg" alt="mejores-regalos_A0035">
              <ul class="card-product__imgOverlay">
              <li><button><i class="ti-shopping-cart"></i></button></li>

              </ul>
            </div>
            <div class="card-body">
              <p>ARETES</p>
              <h4 class="card-product__title"><a href="single-product.php">TOPOS ENREDADO ROJO</a></h4>
              <p class="card-product__price">$27.990
              </p>
            </div>
          </div>

          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="img/glamista/mejores-regalos_A0034.jpg" alt="mejores-regalos_A0034">
              <ul class="card-product__imgOverlay">
              <li><button><i class="ti-shopping-cart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>ARETES</p>
              <h4 class="card-product__title"><a href="single-product.php">TOPOS ENREDADO VERDE</a></h4>
              <p class="card-product__price">$27.990</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= -->

    <!-- ================ Blog section start ================= -->
    <section class="blog">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Novedades del mercado</p>
          <h2>Próximos <span class="section-intro__style">artículos</span></h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="img/glamista/PROXIMOS-ARTICULOS_P0004M.jpg" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Glamista Store</a></li>
                </ul>
                <h4 class="card-blog__title"><a href="single-blog.php">Titulo de nuevo articulo</a></h4>
                <p>Descripción del articulo</p>
                <a class="card-blog__link" href="#">Conocer más <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="img/glamista/PROXIMOS-ARTICULOS_P0029M.jpg" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Glamista Store</a></li>
                >
                </ul>
                <h4 class="card-blog__title"><a href="single-blog.php">Titulo de nuevo articulo</a></h4>
                <p>Descripción del articulo</p>
                <a class="card-blog__link" href="#">Conocer más <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="img/glamista/PROXIMOS-ARTICULOS_P0030M.jpg" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Glamista Store</a></li>

                </ul>
                <h4 class="card-blog__title"><a href="single-blog.php">Titulo de nuevo articulo</a></h4>
                <p>Descripción del articulo</p>
                <a class="card-blog__link" href="#">Conocer más <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Blog section end ================= -->

    <!-- ================ Subscribe section start ================= -->
    <section class="subscribe-position">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">¡SUSCRIBETE!</h3>
          <p>Suscribete para recibir ofertas y novedades de Glamista Store</p>
          <body>

            <form action="guardarArchivo.php" method="post" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="text" name="nombre" placeholder="Ingresa tu nombre" ><br>
                <input class="form-control mb-1" type="email" name="email" placeholder="Ingresa tu email" >
                <div class="info"></div>
              </div>
              <input class="button button-subscribe mr-auto mb-1" type="submit" name="boton" value="Suscribete" onclick="document.getElementById('id01').style.display='block'"></button>

              <div style="position: absolute; left: -5000px;">

              </div>

            </form>
          </body>


        </div>
      </div>





    </section>
    <!-- ================ Subscribe section end ================= -->



  </main>





  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


<?php include('footer.php'); ?>
