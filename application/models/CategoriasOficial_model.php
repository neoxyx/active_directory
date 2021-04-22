<?php

class CategoriasOficial_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('CategoriasOficiales');
        $query = $this->db->get();
        return $query->result();
    }
}
