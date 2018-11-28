<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-8 offset-2">
        <?php
        	echo "<h1><span class='badge badge-secondary'>".$noticia['titulo']."</span></h1>".
                "<hr>".
                "<div class='text-center'>".
                    "<img class='img-fluid' src='".base_url()."uploads/".$noticia['imagen2']."' alt='Primera Imagen'>".
                "</div>".
                    "<hr>".
                        "<h4><span class='badge badge-secondary'>".$noticia['fecha']."</span>  <span class='badge badge-secondary'>ECON</span></h4>".
                    "<hr> ".
                        "<p class='text-justify'>".$noticia['texto']."</p>".
                    "<hr>";
        ?>    
        </div>
    </div>
</div>