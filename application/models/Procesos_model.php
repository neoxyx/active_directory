<?php

class Procesos_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('Procesos');
        $query = $this->db->get();
        return $query->result();
    }
}
