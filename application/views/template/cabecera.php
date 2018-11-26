<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fin CSRF Token -->

        <title>ECON</title>
        <!-- Styles -->
            <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/css/hover.css" rel="stylesheet" type="text/css">
            <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/econ.ico" />
        <!-- FinStyles -->
    </head>
    <body class="color-fondo">
        <!-- Navegación -->
        <nav class="navbar navbar-expand-md navbar-light flex-row fixed-top justify-content-end p-0 m-0" style="background-color: rgb(226,227,229);" >
            <ul class="navbar-nav flex-row ml-lg-0">
                    <li class="nav-item">
                        <a class="nav-link p-3" href="<?php echo base_url();?>inicio/login"><i class="fa fa-user" style="color:black;"></i></a>
                    </li>
            </ul>         
        </nav>
        <nav class="navbar navbar-expand-md navbar-light flex-row fixed-top fixed-top-1 justify-content-center" style="background-color: rgb(226,227,229);" >
            <div class="flex-row">
                <a class="navbar-brand mr-auto" href="/">
                    <img src="<?php echo base_url();?>assets/img/econ_grande_a.svg" class="img-fluid" alt="Responsive image">
                </a>
            </div>
            <button class="navbar-toggler ml-lg-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light fixed-top fixed-top-1 fixed-top-2" style="background-color: rgb(187, 188, 189);">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="<?php echo base_url();?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="<?php echo base_url();?>inicio/quienesomos">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow"href="<?php echo base_url();?>inicio/nuestrosproyectos">Nuestros Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="<?php echo base_url();?>inicio/financiamiento">Financiamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="<?php echo base_url();?>inicio/noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="<?php echo base_url();?>inicio/contactos">Contactos</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0 mr-3">
                    <input class="form-control" type="text" placeholder="Search" value="593 + 960534358">
                    <button class="btn btn-outline-secondary" type="submit"><a href="https://api.whatsapp.com/send?phone=593960534358"><i class="fab fa-whatsapp"></i></a></button>
                </div>
            </div>       
        </nav>
        <!-- FinNavegacion -->

        <!-- Contenido -->

        <!-- FinContenido -->
