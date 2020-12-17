<?php
class ModelsUsers extends CI_Model {

    function __construct() {
        // parent::__construct();
        $this->load->database();
    }

    public function save($user, $user_info){
        $this->db->trans_start(TRUE);

        $this->db->insert("usuarios", $user);
        $user_info['id_usuario'] = $this->db->insert_id();
        $this->db->insert("medicos", $user_info);

        $this->db->trans_complete();

        return !$this->db->trans_status() ? false : true;
    }
}