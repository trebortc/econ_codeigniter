<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ImagenModel extends CI_Model
{

    function __construct(){
        parent::__construct();
    }

    public function parametros()
    {   
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';
        return $config;
    }

    public function cargarImagenServidor($imagen)
    {
        $config = $this->parametros();
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($imagen) )
        {
            $error = array('error' => $this->upload->display_errors());
            return null;
        }
        else
        {
            $file_info = $this->upload->data();
            $imagen1 = $file_info['file_name'];
        }
        return $imagen1;
    }


}