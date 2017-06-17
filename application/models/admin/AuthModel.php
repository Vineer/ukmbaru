<?php

class AuthModel extends CI_Model {

	function CekUser($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('akun');
    }
}

?>