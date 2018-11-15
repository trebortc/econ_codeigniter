<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ECON</title>
            <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/css/hover.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>econ.ico" />
    </head>
    <body class="color-fondo">
        <!-- Navegación -->
        <nav class="navbar navbar-expand-md navbar-light flex-row fixed-top justify-content-end p-0 m-0" style="background-color: rgb(226,227,229);" >
            <ul class="navbar-nav flex-row ml-lg-0">
                <li class="nav-item">
                    <a class="nav-link p-3"><i class="fa fa-search" style="color:black;"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3"><i class="fa fa-user" style="color:black;"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3"><i class="fab fa-facebook-f" style="color:black;"></i></a>
                </li>
            </ul>         
        </nav>
        <nav class="navbar navbar-expand-md navbar-light flex-row fixed-top fixed-top-1 justify-content-center" style="background-color: rgb(226,227,229);" >
            <div class="flex-row">
                <a class="navbar-brand mr-auto" href="/">
                    <img src="img/econ_grande_a.svg" class="img-fluid" alt="Responsive image">
                </a>
            </div>
            <button class="navbar-toggler ml-lg-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light fixed-top fixed-top-1 fixed-top-2" style="background-color: rgb(187, 188, 189);">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="quienesomos.html">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="proyectos.html">Nuestros Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="financiamiento.html">Financiamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="noticias.html">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="contactos.html">Contactos</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0 mr-3">
                    <input class="form-control" type="text" placeholder="Search" value="593 + 969305524">
                    <button class="btn btn-outline-secondary" type="submit"><a href="https://api.whatsapp.com/send?phone=593969305524"><i class="fa fa-phone"></i></a></button>
                </div>
            </div>       
        </nav>
        

        <div class="container-fluid m-0 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/banner-1.jpeg" alt="First slide">                     
                        <div class="carousel-caption d-none d-md-block">
                            <div class="contenido-carousel m-3 p-3">
                                <h5>VALLE DORADO </h5>
                                <p>Casas de dos plantas con acabados, de 110 M2 a $75.000</p>
                            </div>
                            <a href="proyecto-1.html"><button type="button" class="btn btn-secondary mr-3">Más información</button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner-1.jpeg" alt="First slide">                     
                        <div class="carousel-caption d-none d-md-block">
                            <div class="contenido-carousel m-3 p-3">
                                <h5>VALLE DORADO </h5>
                                <p>Casas de dos plantas con acabados, de 110 M2 a $75.000</p>
                            </div>
                            <a href="proyecto-1.html"><button type="button" class="btn btn-secondary mr-3">Más información</button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner-1.jpeg" alt="First slide">                     
                        <div class="carousel-caption d-none d-md-block">
                            <div class="contenido-carousel m-3 p-3">
                                <h5>VALLE DORADO </h5>
                                <p>Casas de dos plantas con acabados, de 110 M2 a $75.000</p>
                            </div>
                            <a href="proyecto-1.html"><button type="button" class="btn btn-secondary mr-3">Más información</button></a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">                   
                    <i class="fa fa-caret-left fa-5x" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="fa fa-caret-right fa-5x"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="esp-bloq">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center pb-3">
                    <h3>Un proyecto para cada estilo de vida</h3>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <img src="img/foco.png" alt="casa ejm" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img src="img/foco.png" alt="casa ejm" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img src="img/foco.png" alt="casa ejm" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img src="img/foco.png" alt="casa ejm" class="img-fluid rounded-circle">
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col text-center pt-3">
                    Sea cual sea tu necesidad y tu estilo de vida tenemos un proyecto para ti.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="esp-bloq">
            </div>
        </div>
        <div class="container-fluid color-s">
            <div class="row justify-content-center p-3">
                <div class="col-sm-5 m-5 contorno">
                    <div class="titulo-card">
                        <h5 class="pt-2 pb-2 mb-2">VALLE DORADO:</h5>
                    </div>
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 color-l-p">Casas</strong>
                            <h3 class="mb-0">
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">Casas de dos plantas con acabados, de 110 M2 a $75.000</p>
                            <a class="color-l-p" href="proyecto-1.html">Más información</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block img-p-1" src="img/casa_1.png" alt="Card image cap">
                    </div>
                    <div class="pie-card border-top p-2">
                        <span class="badge badge-pill badge-light"> <i class="fa fa-stop fa-2x" aria-hidden="true"></i> m2</span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-map-marked fa-2x" aria-hidden="true"></i> Ubicacion</span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-bed fa-2x" aria-hidden="true"></i> Dormitorios </span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-bath fa-2x" aria-hidden="true"></i> Baños </span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-car fa-2x" aria-hidden="true"></i> Garage</span>
                    </div>
                </div>
                <div class="col-sm-5 m-5 contorno">
                    <div class="titulo-card">
                        <h5 class="pt-2 pb-2 mb-2">VALLE DORADO:</h5>
                    </div>
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 color-l-p">Casas</strong>
                            <h3 class="mb-0">
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">Casas de dos plantas con acabados, de 110 M2 a $75.000</p>
                            <a class="color-l-p" href="proyecto-1.html">Más información</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block img-p-1" src="img/casa_1.png" alt="Card image cap">
                    </div>
                    <div class="pie-card border-top p-2">
                        <span class="badge badge-pill badge-light"> <i class="fa fa-stop fa-2x" aria-hidden="true"></i> m2</span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-map-marked fa-2x" aria-hidden="true"></i> Ubicacion</span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-bed fa-2x" aria-hidden="true"></i> Dormitorios </span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-bath fa-2x" aria-hidden="true"></i> Baños </span>
                        <span class="badge badge-pill badge-light"> <i class="fa fa-car fa-2x" aria-hidden="true"></i> Garage</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="esp-bloq">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="img/noticia1.jpeg" alt="Card image cap">  
                        <div class="card-body">
                        <h6>Noviembre 12, 2018 por <span class="badge badge-secondary">ECON</span></h6>
                        <p class="card-text">Ecuador Construye -ECON-, de manera responsable con el país y los ecuatorianos...</p>
                        <a href="noticias-1.html" class="btn btn-secondary btn-sm">Leer más <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="img/noticia1.jpeg" alt="Card image cap">  
                        <div class="card-body">
                        <h6>Noviembre 12, 2018 por <span class="badge badge-secondary">ECON</span></h6>
                        <p class="card-text">Ecuador Construye -ECON-, de manera responsable con el país y los ecuatorianos...</p>
                        <a href="noticias-1.html" class="btn btn-secondary btn-sm">Leer más <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="img/noticia1.jpeg" alt="Card image cap">  
                        <div class="card-body">
                        <h6>Noviembre 12, 2018 por <span class="badge badge-secondary">ECON</span></h6>
                        <p class="card-text">Ecuador Construye -ECON-, de manera responsable con el país y los ecuatorianos...</p>
                        <a href="noticias-1.html" class="btn btn-secondary btn-sm">Leer más <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="btn btn-lg btn-dark" href="#top">
            <span class="sr-only">Toggle to Top Navigation</span>
            <i class="fa fa-chevron-up"></i>
        </a>

        <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5">
        <div style="background-color: rgb(0, 72, 94);">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">¡Conéctate con nosotros en las redes sociales!</h6>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a class="fb-ic"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                    <!-- Twitter -->
                    <a class="tw-ic"><i class="fab fa-twitter text-white mr-4"></i></a>
                    <!-- Google +-->
                    <a class="gplus-ic"><i class="fab fa-google-plus text-white mr-4"></i></a>
                    <!--Linkedin -->
                    <a class="li-ic"><i class="fab fa-linkedin text-white mr-4"></i></a>
                    <!--Instagram-->
                    <a class="ins-ic"><i class="fab fa-instagram text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3 dark-grey-text">
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold text-econ">ECON</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="lead text-justify">Es una empresa sólida, con proyectos inmobiliarios edificados de la mano de profesionales de primer nivel con más de 35 años de experiencia en el mercado de la construcción en el Ecuador. </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-econ">Proyectos</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a class="text-econ" href="proyecto-1.html">Proyecto 1</a></p>
                    <p><a class="text-econ" href="#!">Proyecto 2</a></p>
                    <p><a class="text-econ" href="#!">Proyecto 3</a></p>
                    <p><a class="text-econ" href="#!">Proyecto 4</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-econ">Noticias</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a class="text-econ" href="noticias-1.html">Noticia 1</a></p>
                    <p><a class="text-econ" href="#!">Noticia 2</a></p>
                    <p><a class="text-econ" href="#!">Noticia 3</a></p>
                    <p><a class="text-econ" href="#!">Noticia 4</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase font-weight-bold text-econ">Contactos</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fa fa-home mr-3"></i> Edif. Daniel Cárdenas 6to Piso Ofic. 601</p>
                    <p><i class="fa fa-envelope mr-3"></i> valledorado.quito@gmail.com</p>
                    <p><i class="fa fa-phone mr-3"></i> (02) 2900 952</p>
                    <p><i class="fa fa-print mr-3"></i> (02) 2900 930 </p>
                    <p><i class="fa fa-mobile mr-3"></i> (02) 0960535358 </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js" type="text/javascript" charset="utf-8" ></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js" type="text/javascript" charset="utf-8" ></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
    <script src="<?php echo base_url();?>assets/js/custom1.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>
