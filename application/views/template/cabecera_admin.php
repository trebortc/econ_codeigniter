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
    <body>
        <!-- Navegación -->
        <ul class="nav nav-tabs bg-dark flex-row fixed-top p-4">
            <li class="nav-item active">
                <h5 class="">
                    <a class="" href="<?php echo base_url();?>Inicio/">
                        <?php 
                            echo "<img src='".base_url()."/assets/img/econ_b.svg' alt='financiamiento' class='pr-3n'>";
                        ?>
                    </a>
                </h5>
                
            </li>
                
            <li class="nav-item">
                <a class="p-4 nav-link text-white font-weight-bold" href="<?php echo base_url();?>Banner/">Banner</a>
            </li>
            <li class="nav-item">
                <a class="p-4 nav-link text-white font-weight-bold" href="<?php echo base_url();?>Proyectos/">Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="p-4 nav-link text-white font-weight-bold" href="<?php echo base_url();?>Noticias/">Noticias</a>
            </li>
        </ul>
        <!-- FinNavegacion -->

        <!-- Contenido -->

        <!-- FinContenido -->
