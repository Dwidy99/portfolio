<?php 

Class Auth_model extends CI_Model {

    public function register($data)
    {
        return $this->db->insert('user', $data);
    }
}