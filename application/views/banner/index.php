<div class="container-fluid">
    <div class="row text-right">
        <div class="col-11">
            <a href="#" class="btn btn-info" role="button">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n=1;
                            foreach ($banners as $banner)
                            {
                                echo "<tr>".
                                "<th scope='row'>".$n++."</th>".
                                "<td>".$banner->titulo."</td>".
                                "<td>".$banner->descripcion."</td>".
                                "<td>".$banner->precio."</td>".
                                "<td>". 
                                    "<a href='banner/modificar/".$banner->id."'>Modifcar</a>".
                                    "<a href='banner/eliminar/".$banner->id."'>Eliminar</a>".
                                "</td>".
                                "</tr>";    
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


