<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 mx-auto pt-5 pb-5">
            <h3>Ingresar</h3>
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>inicio/ingresar">
                <div class="form-group">
                    <label for="usuario" class="col-md-4">Usuario</label>
                    <div class="col-md-6">
                        <input id="usuario" type="usuario" class="form-control" name="usuario" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Ingresar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>