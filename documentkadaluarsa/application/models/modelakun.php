<?php

class ModelAkun extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function cekUserPass($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->num_rows() > 0;
    }
    
    function isLogin() {
        return $this->session->userdata('username');
    }


}

?>