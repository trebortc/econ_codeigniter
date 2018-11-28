    <div class="container-fluid m-0 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                    $b = TRUE;
                    foreach($banners as $banner)
                    {
                        echo "<div class='carousel-item ".($b? 'active':'')."'>".
                            "<img class='d-block w-100' src='".base_url()."uploads/".$banner->imagen1."' alt='First slide'>".
                            "<div class='carousel-caption d-none d-md-block'>".
                                "<div class='contenido-carousel m-3 p-3'>".
                                        "<h5>".$banner->titulo."</h5>".
                                        "<p>".$banner->descripcion."...</p>".
                                        "<h6> Desde".$banner->precio."</h6>".
                                "</div>".
                                "<a type='button' href='".base_url()."banner/ver/".$banner->id."' class='btn btn-secondary mr-3'>Más información</a>".
                            "</div>".
                            "</div>";
                        $b = FALSE;
                    }
                ?>
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
                    <?php 
                        echo "<img src='".base_url()."/assets/img/lug/arboles.png' alt='casa ejm' class='img-fluid rounded-circle' style='width:80%;'>";
                    ?>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <?php 
                        echo "<img src='".base_url()."/assets/img/lug/cancha.png' alt='casa ejm' class='img-fluid rounded-circle' style='width:80%;'>";
                    ?>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <?php 
                        echo "<img src='".base_url()."/assets/img/lug/laguna.png' alt='casa ejm' class='img-fluid rounded-circle' style='width:80%;'>";
                    ?>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <?php 
                        echo "<img src='".base_url()."/assets/img/lug/museo.png' alt='casa ejm' class='img-fluid rounded-circle' style='width:80%;'>";
                    ?>
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col text-center pt-4">
                <h4>Econ, la más importante empresa constructora ecuatoriana, líder en cumplir tus sueños de casa propia</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="esp-bloq">
        </div>
    </div>
