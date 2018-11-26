<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>MENSAJE: </strong> <?=$mensaje;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    </div>
    <div class="row text-right">
        <div class="col-11">
            <a href="<?php echo base_url();?>proyectos/nuevo" class="btn btn-info" role="button">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <h1><span class='badge badge-dark'>Proyectos</span></h1>
            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n=1;
                            foreach ($proyectos as $proyecto)
                            
                            {
                                echo "<tr>".
                                "<th scope='row'>".$n++."</th>".
                                "<td>".$proyecto->titulo."</td>".
                                "<td>".$proyecto->descripcion."</td>".
                                "<td>".$proyecto->precio."</td>".
                                "<td>".$proyecto->tipo."</td>".
                                "<td>".$proyecto->fecha."</td>".
                                "<td>". 
                                    "<a href='".base_url()."Proyectos/editar/".$proyecto->id."'>Editar</a>".
                                    "<a href='".base_url()."Proyectos/eliminar/".$proyecto->id."'>Eliminar</a>".
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


