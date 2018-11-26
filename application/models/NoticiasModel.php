<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NoticiasModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($titulo, $descripcion, $texto, $fecha, $imagen1, $imagen2)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'texto' => $texto,
            'fecha' => $fecha,
            'imagen1' => $imagen1,
            'imagen2' => $imagen2
        );
        
        return $this->db->insert('noticias', $datos);
    }

    public function getNoticias()
    {
        return $this->db->query('select * from noticias')->result();
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("noticias");
        return $query->row_array();
    }

    public function actualizar($id, $titulo, $descripcion, $texto, $fecha)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'texto' => $texto,
            'fecha' => $fecha
        );

        $this->db->where('id',$id);
        $this->db->update('noticias',$datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('noticias',$dato);
    }
    
}
