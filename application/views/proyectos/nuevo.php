<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Nuevo Proyecto</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="<?php echo base_url();?>proyectos/guardar" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese un título">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese una precio referente">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese clasificación general">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingrese una fecha">
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea class="form-control" id="texto" name="texto"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen pequeña</label>
                    <input type="file" class="form-control-file" id="imagen1" name="imagen1">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen grande 1</label>
                    <input type="file" class="form-control-file" id="imagen2" name="imagen2">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen grande 2</label>
                    <input type="file" class="form-control-file" id="imagen3" name="imagen3">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen grande 3</label>
                    <input type="file" class="form-control-file" id="imagen4" name="imagen4">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen grande 4</label>
                    <input type="file" class="form-control-file" id="imagen5" name="imagen5">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen grande 5</label>
                    <input type="file" class="form-control-file" id="imagen6" name="imagen6">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/vendor/ckeditor_s/ckeditor.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js" type="text/javascript" charset="utf-8" ></script>
<script>
	$(document).ready(function(){
	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';
		CKEDITOR.replace('texto');
	});
</script>