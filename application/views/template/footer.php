<footer class="page-footer font-small blue-grey lighten-5">
    <div style="background-color: rgb(0, 72, 94);">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">¡Conéctate con nosotros en las redes sociales!</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                <a class="" href = 'https://www.facebook.com/ecuadorconstruyesuenos/'><i class="fab fa-facebook-f text-white mr-4"></i></a>
                <!-- Twitter -->
                <a class="" href = 'https://twitter.com/econsuenos'><i class="fab fa-twitter text-white mr-4"></i></a>
                <!-- Google +-->
                <a class="" href = 'https://www.youtube.com/channel/UC_BDi4p-MlA-Y0C_WWj-E3w'><i class="fab fa-youtube text-white mr-4"></i></a>
                <!--Linkedin -->
                <a class="" href = 'https://api.whatsapp.com/send?phone=593960534358'><i class="fab fa-whatsapp text-white mr-4"></i></a>
                <!--Instagram-->
                <a class="" href = 'https://www.instagram.com/econstructruyesuenos/'><i class="fab fa-instagram text-white"></i></a>
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
                <?php
                    $p = 1;
                        foreach($proyectos as $proyecto)
                        {
                            if($p <= 3){
                                echo "<p><a class='text-econ' href='".base_url()."proyectos/ver/".$proyecto->id."'>Proyecto ".$p++."</a></p>";
                            }
                        }
                    
                ?>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold text-econ">Noticias</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <?php
                    $n = 1;
                        foreach($noticias as $noticia)
                        {
                            if($n <= 3){
                                echo "<p><a class='text-econ' href='".base_url()."noticias/ver/".$noticia->id."'>Noticia".$n++."</a></p>";
                            }    
                        }
                ?>
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