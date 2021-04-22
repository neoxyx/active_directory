<?php

class Escenarios_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('Escenarios');
        $query = $this->db->get();
        return $query->result();
    }
}
