<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProyectosModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($titulo, $descripcion, $precio, $texto, $tipo, $fecha, $imagen1, $imagen2, $imagen3, $imagen4, $imagen5, $imagen6)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'texto' => $texto,
            'tipo' => $tipo,
            'fecha' => $fecha,
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3,
            'imagen4' => $imagen4,
            'imagen5' => $imagen5,
            'imagen6' => $imagen6
        );
        
        return $this->db->insert('proyectos', $datos);
    }

    public function getProyectos()
    {
        return $this->db->query('select * from proyectos order by id desc')->result();
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("proyectos");
        return $query->row_array();
    }

    public function actualizar($id, $titulo, $descripcion, $precio, $texto, $tipo, $fecha)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'texto' => $texto,
            'precio' => $precio,
            'tipo' => $tipo,
            'fecha' => $fecha
        );

        $this->db->where('id',$id);
        $this->db->update('proyectos',$datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('proyectos',$dato);
    }
}
