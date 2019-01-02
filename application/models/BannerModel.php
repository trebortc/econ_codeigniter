<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BannerModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($titulo, $descripcion, $texto, $precio, $imagen1)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'texto' => $texto,
            'precio' => $precio,
            'imagen1' => $imagen1
        );
        
        return $this->db->insert('banner', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('banner',$dato);
    }
    
    public function getBanners()
    {
        return $this->db->query('select * from banner')->result();
    }

    public function getBanner($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('banner');
        return $query->row_array();
    }

    public function actualizar($id, $titulo, $descripcion, $texto, $precio)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'texto' => $texto,
            'precio' => $precio
        );

        $this->db->where('id',$id);
        $this->db->update('banner',$datos);
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("banner");
        return $query->row_array();
    }

}