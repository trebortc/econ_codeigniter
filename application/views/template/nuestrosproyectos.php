<div class='container-fluid color-s'>
    <div class='esp-bloq'>
    </div>
</div>
<div class='container-fluid color-s'>
    <div class='row justify-content-center'>
        <div class='col'>
            <h2>PROYECTOS</h2>
        </div>
    </div>
    <div class='row justify-content-center'>
        <?php
        foreach($proyectos as $proyecto)
        echo "<div class='col m-5'>".
                "<div class='card mx-auto' style='width: 18rem;'>".
                    "<a href=''>".
                        "<img class='card-img-top' src='".base_url()."uploads/".$proyecto->imagen1."' alt='Card image cap'>".
                        "<figcaption class='texto-figura' >".$proyecto->tipo."</figcaption>".
                    "</a>".
                    "<div class='card-body'>".
                        "<h5 class='pt-2 pb-2 mb-2'>".$proyecto->titulo."</h5>".
                        "<p class='card-text mb-auto'>".$proyecto->descripcion."</p>".
                    "<a class='color-l-p' href='".base_url()."proyectos/ver/".$proyecto->id."'>Más información</a>".
                        "<h4 class='mb-0'>".
                            "<a class='text-dark' href='#'>".$proyecto->precio."</a>".
                        "</h4>".
                    "</div>".
                "</div>".
            "</div>";
        ?>
    </div>
</div>