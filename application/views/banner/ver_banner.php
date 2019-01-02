<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-8 offset-2">
        <?php
            echo "<h1><span class='badge badge-secondary'>".$banner['titulo']."</span></h1>".
                "<h5><span class='badge badge-secondary'>Desde:</span><span class='badge badge-secondary'>".$banner['precio']."</span></h5>".
                "<hr>".
                "<div class='text-center'>".
                    "<img class='img-fluid' src='".base_url()."uploads/".$banner['imagen1']."' alt='Primera Imagen'>".
                "</div>".
                    "<hr>".
                        "<h4><span class='badge badge-secondary'>ECON</span></h4>".
                    "<hr> ".
                        "<p class='text-justify'>".$banner['texto']."</p>".
                    "<hr>";
        ?>    
        </div>
    </div>
</div>