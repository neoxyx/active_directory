<?php

class Canales_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('Canales');
        $query = $this->db->get();
        return $query->result();
    }
}
