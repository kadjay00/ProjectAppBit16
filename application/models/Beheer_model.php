<?php
class Beheer_model extends CI_Model {
    function login($username, $pass)
    {
        $this->db->where(array('username' => $username));
        $query = $this->db->get('Beheer');

        // print_r(password_hash('gmatthias', PASSWORD_DEFAULT));

        echo $query->row()->pass;
        echo '</br>';
        echo $pass;

        if (password_verify($query->row()->pass, $pass)) {
            return $query->result();
        }
    }
}
?>