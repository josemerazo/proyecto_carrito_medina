<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto2</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

    </head>


    <!-- Navbar -->
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand me-auto" href="#">UCSGeats</a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UCSGeats</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="http://localhost/example-ap/public/shop">Explorar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="http://localhost/example-ap/public/cart">Carrito </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="#">Cuenta</a>
                  </li>
              </ul>
            </div>
          </div>


                    <a href="{{route('logout')}}" class="login-button">Salir</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
        </nav>

      <section class="hero-section">
      </section>


      <!-- Banner -->
      <section class="banner">
        <div class="contenido-banner">
            <p>GRANDES OFERTAS EN PRODUCTOS</p>
            <h2>BIENVENIDO <br /> @auth{{Auth::user()->name}} @endauth</h2>
            <a href="http://localhost/example-ap/public/shop">Explorar</a>
        </div>
    </section>

    <!-- Mensajes debajo de banner -->
    <main class="main-contenido">
        <section class="container container-features">
            <div class="Mensajes">
                <i class="fa-solid fa-money-bill"></i>
                <div class="Contenido">
                    <span>Mejores ofertas</span>
                    <p>Todos los dias</p>
                </div>
            </div>
            <div class="Mensajes">
                <i class="fa-solid fa-plane-up"></i>
                <div class="Contenido">
                    <span>Envios seguros y rapidos</span>
                    <p>A todo el Ecuador</p>
                </div>
            </div>
            <div class="Mensajes">
                <i class="fa-solid fa-gift"></i>
                <div class="Contenido">
                    <span>Tarjeta regalo UCSG</span>
                    <p>Mantente al dia en tus pagos </p>
                </div>
            </div>
            <div class="Mensajes">
                <i class="fa-solid fa-headset"></i>
                <div class="Contenido">
                    <span>Servicio al cliente 24/7</span>
                    <p>LLámenos 24/7 </p>
                </div>
            </div>
        </section>

        <!-- Categorias de mejores productos -->
        <section class="container top-categorias">
            <h1 class="heading-1">Mejores Categorías de productos</h1>
            <div class="container-categories">
                <div class="card-category categoria-lacteo">
                    <p>Lacteos</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category categoria-embutido">
                    <p>Embutidos</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category categoria-golosinas">
                    <p>Golosinas</p>
                    <span>Ver más</span>
                </div>
            </div>
        </section>


        <!-- Mejores productos -->
        <section class="container top-products">
            <h1 class="heading-1">Mejores Productos</h1>

            <div class="container-options">
                <span class="active">Destacados</span>
                <span>Más recientes</span>
                <span>Mejores Vendidos</span>
            </div>

            <div class="container-products">


                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="https://www.fybeca.com/dw/image/v2/BDPM_PRD/on/demandware.static/-/Sites-masterCatalog_FybecaEcuador/default/dwb1123c0e/images/large/17040-LECHE-LA-LECHERA-ENTERA-1-L-UNIDAD.JPG?sw=1000&sh=1000" alt="Cafe Irish" />
                        <span class="discount">-50%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Leche la lechera</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$0.80 <span>$1.60</span></p>
                    </div>
                </div>


                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img
                            src="https://www.ubuy.ec/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNjFHMjFydUhCckwuX1NMMTAwMF8uanBn.jpg"
                            alt="Cafe incafe-ingles.jpg"
                        />
                        <span class="discount">-22%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>M&M</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.70 <span>$7.30</span></p>
                    </div>
                </div>


                <!--Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img
                            src="https://d2o812a6k13pkp.cloudfront.net/Productos/40452877_0120220314172943.jpg"
                            alt="Cafe Australiano"
                        />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Coca cola</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.20</p>
                    </div>
                </div>


                <!--Producto 4-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="https://farmaciascruzazul.ec/images/thumbs/1603913_acondicionador-pantene-pro-v-hidratacion-extrema-87491-200-ml336808.jpeg" alt="Cafe Helado" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Pantene Pro-V</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.60</p>
                    </div>
                </div>

                <!-- Producto 5 -->
                <div class="card-product">
                    <div class="container-img">
                        <img
                            src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71776YJLlOL.jpg"
                            alt="Cafe incafe-ingles.jpg"
                        />
                        <span class="discount">-22%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Hersheys</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.70 <span>$7.30</span></p>
                    </div>
                </div>

                <!-- Producto 6 -->
                <div class="card-product">
                    <div class="container-img">
                        <img
                            src="https://www.fybeca.com/dw/image/v2/BDPM_PRD/on/demandware.static/-/Sites-masterCatalog_FybecaEcuador/default/dw38d39e18/images/large/33188-CEREAL-ZUCARITA-KELLOGGS-300G-CAJA.jpg?sw=1000&sh=1000"
                            alt="Cafe incafe-ingles.jpg"
                        />
                        <span class="discount">-22%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Zucaritas</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.70 <span>$7.30</span></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Galeria de imagenes -->
        <section class="gallery">
            <img
                src="https://www.ocu.org/-/media/ocu/images/home/alimentacion/alimentos/lacteos_blanco_.jpg?rev=04e2ca66-8851-4a07-b5d8-4c879f0d727f&hash=8B19CF9984C4138BDC89616BC096C835"
                alt="Gallery Img1"
                class="gallery-img-1"
            /><img
                src="https://neveraespanola.com/wp-content/uploads/2022/07/recetas-de-embutidos-artesanales.jpg"
                alt="Gallery Img2"
                class="gallery-img-2"
            /><img
                src="https://image.ondacero.es/clipping/cmsimages02/2022/08/01/E8B9DFF2-F98F-4A84-8C78-955A0E846C13/imagen-archivo-caja-llena-chocolatinas-diferentes-marcas_98.jpg?crop=5340,3004,x0,y530&width=1900&height=1069&optimize=high&format=webply"
                alt="Gallery Img3"
                class="gallery-img-3"
            /><img
                src="https://tiendakarcher.pe/wp-content/uploads/2023/01/productos-limpieza.jpg"
                alt="Gallery Img4"
                class="gallery-img-4"
            /><img
                src="https://i.blogs.es/7fc543/alcohol/1366_2000.jpg"
                alt="Gallery Img5"
                class="gallery-img-5"
            />
        </section>


        <!-- Productos especiales -->
        <section class="container specials">
            <h1 class="heading-1">Especiales</h1>

            <div class="container-products">


                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="https://manta.laguarda.com.ec/wp-content/uploads/2020/04/SIX-PACK-CORONA.jpeg" alt="Cafe Irish" />
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Sixpack cerveza corona</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.60 <span>$5.30</span></p>
                    </div>
                </div>


                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img
                            src="https://d2o812a6k13pkp.cloudfront.net/fit-in/455x455/Productos/40481895_0320220915162400.jpg"
                            alt="Cafe incafe-ingles.jpg"
                        />
                        <span class="discount">-22%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Pack papel higienico Scott</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.70 <span>$7.30</span></p>
                    </div>
                </div>


                <!-- Producto 3-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="https://california.ec/wp-content/uploads/2022/08/inglesa.jpg" alt="Cafe Viena" />
                        <span class="discount">-30%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Torta inglesa</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.85 <span>$5.50</span></p>
                    </div>
                </div>


                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="https://tortamaniaecuador.com/wp-content/uploads/2021/12/Masa-de-Novia.jpg" alt="Cafe Liqueurs" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Torta Masa de novia</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.60</p>
                    </div>
                </div>
            </div>
        </section>


    <!-- Footer -->
    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>
                            Universidad Católica de Santiago de Guayaquil
                        </li>
                        <li>Teléfono: 0912345678</li>
                        <li>EmaiL: proyecto2@gmail.com</li>
                    </ul>
                    <div class="social-icons">
                        <span class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </span>
                        <span class="pinterest">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </span>
                        <span class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                    </div>
                </div>

                <div class="information">
                    <p class="title-footer">Información</p>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>

                <div class="my-account">
                    <p class="title-footer">Mi cuenta</p>

                    <ul>
                        <li><a href="#">Mi cuenta</a></li>
                        <li><a href="#">Historial de envios</a></li>
                        <li><a href="#">Carrito </a></li>

                    </ul>
                </div>

                <div class="newsletter">
                    <p class="title-footer">Registrate</p>

                    <div class="content">
                        <p>
                            Registrate y obten grandes ofertas, obten recompensas por estar al dia en tus pagos.
                        </p>

                        <button>Registrate</button>
                    </div>
                </div>

        </div>
    </footer>

    <script
        src="https://kit.fontawesome.com/81581fb069.js"
        crossorigin="anonymous"
    ></script>
</body>
</html>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </body>
      </html>
