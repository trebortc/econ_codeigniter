<div class="container-fluid">
        <div class="row p-3">
            <?php
                foreach($noticias as $noticia)
                {
                echo "<div class='col-sm-4'>".
                    "<div class='card'>".
                        "<img class='card-img-top img-fluid' src='".base_url()."uploads/".$noticia->imagen1."'  alt='imagen'>".
                        "<div class='card-body'>".
                            "<h6>".$noticia->fecha." por <span class='badge badge-secondary'>ECON</span></h6>".
                            "<p class='card-text'>".$noticia->descripcion."</p>".
                            "<a href='".base_url()."noticias/ver/".$noticia->id."' class='btn btn-secondary btn-sm'>Leer más <i class='fa fa-caret-right' aria-hidden='true'></i></a>".
                        "</div>".
                    "</div>".
                "</div>";    
                }
            ?>
        </div>
</div>