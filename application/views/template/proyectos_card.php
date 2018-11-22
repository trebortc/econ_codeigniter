<div class="container-fluid color-s">
    <div class="row justify-content-center p-3">
        <?php
            foreach ($proyectos as $proyecto) 
            {
                echo "<div class='col-sm-5 m-5 contorno'>".
                    "<div class='titulo-card'>".
                        "<h5 class='pt-2 pb-2 mb-2'>".$proyecto->titulo."</h5>".
                    "</div>".
                    "<div class='card flex-md-row mb-4 shadow-sm h-md-250'>".
                        "<div class='card-body d-flex flex-column align-items-start'>".
                            "<strong class='d-inline-block mb-2 color-l-p'>".$proyecto->tipo."</strong>".
                            "<h3 class='mb-0'>".
                                "<a class='text-dark' href='#'> Desde ".$proyecto->precio."</a>".
                            "</h3>".
                            "<div class='mb-1 text-muted'>".$proyecto->fecha."</div>".
                            "<p class='card-text mb-auto'>".$proyecto->descripcion."</p>".
                            "<a class='color-l-p' href='".base_url()."proyectos/ver/".$proyecto->id."'>Más información</a>".
                        "</div>".
                        "<img class='card-img-right flex-auto d-none d-lg-block img-p-1' src='".base_url()."uploads/".$proyecto->imagen1."' alt='Card image cap'>".
                    "</div>".
                    "<div class='pie-card border-top p-2'>".
                        "<span class='badge badge-pill badge-light'> <i class='fa fa-stop fa-2x' aria-hidden='true'></i> m2</span>".
                        "<span class='badge badge-pill badge-light'> <i class='fa fa-map-marked fa-2x' aria-hidden='true'></i> Ubicacion</span>".
                        "<span class='badge badge-pill badge-light'> <i class='fa fa-bed fa-2x' aria-hidden='true'></i> Dormitorios </span>".
                        "<span class='badge badge-pill badge-light'> <i class='fa fa-bath fa-2x' aria-hidden='true'></i> Baños </span>".
                        "<span class='badge badge-pill badge-light'> <i class='fa fa-car fa-2x' aria-hidden='true'></i> Garage</span>".
                    "</div>".
                "</div>";
            }
        ?>
    </div>
</div>
<div class="container-fluid">
    <div class="esp-bloq">
    </div>
</div>