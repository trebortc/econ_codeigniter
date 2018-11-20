<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BannerModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($titulo, $descripcion, $texto, $precio, $imagen1, $imagen2)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'texto' => $texto,
            'precio' => $precio,
            'imagen1' => $imagen1,
            'imagen2' => $imagen2
        );
        
        return $this->db->insert('banner', $datos);
    }

    public function getBanners()
    {
        return $this->db->query('select * from banner')->result();
    }

}