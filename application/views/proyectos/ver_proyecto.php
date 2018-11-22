<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-8 offset-2">
        <?php
        	echo "<h1><span class='badge badge-secondary'>".$proyecto['titulo']."</span></h1>".
                "<hr>".
                "<div class='text-center'>".
                    "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>".
                        "<div class='carousel-inner'>".
                            "<div class='carousel-item active'>".
                                "<img class='d-block w-100 img-fluid' src='".base_url()."uploads/".$proyecto['imagen2']."' alt='Primera Imagen'>".
                            "</div>".
                            "<div class='carousel-item'>".
                                "<img class='d-block w-100' src='".base_url()."uploads/".$proyecto['imagen3']."' alt='Segunda imagen'>".
                            "</div>".
                            "<div class='carousel-item'>".
                                "<img class='d-block w-100' src='".base_url()."uploads/".$proyecto['imagen4']."' alt='Tercera imagen'>".
                            "</div>".
                            "<div class='carousel-item'>".
                                "<img class='d-block w-100' src='".base_url()."uploads/".$proyecto['imagen5']."' alt='Cuarta imagen'>".
                            "</div>".
                            "<div class='carousel-item'>".
                                "<img class='d-block w-100' src='".base_url()."uploads/".$proyecto['imagen6']."' alt='Quinta imagen'>".
                            "</div>".
                        "</div>".
                        "<a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>".
                            "<span class='carousel-control-prev-icon' aria-hidden='true'></span>".
                            "<span class='sr-only'>Previous</span>".
                        "</a>".
                        "<a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>".
                            "<span class='carousel-control-next-icon' aria-hidden='true'></span>".
                            "<span class='sr-only'>Next</span>".
                        "</a>".
                    "</div>".
                "</div>".
                    "<hr>".
                        "<h4><span class='badge badge-secondary'>".$proyecto['tipo']."</span>  <span class='badge badge-secondary'>ECON</span></h4>".
                    "<hr> ".
                        "<p class='text-justify'>".$proyecto['texto']."</p>".
                    "<hr>";
        ?>    
        </div>
    </div>
</div>