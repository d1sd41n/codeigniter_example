<?php
class Auth extends CI_Model {

    function __construct() {
        // parent::__construct();
        $this->load->database();
    }

    public function login($usuario, $password){
        $data = $this->db->get_where('Usuarios',
                array("correo" => $usuario, "contrasena" => $password), 1);
        // var_dump($data->result());
        if(!$data->result()){
            return false;
        }
        return $data->row();
    }
}