<?php

class CategoriasSuboficial_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('CategoriasSuboficiales');
        $query = $this->db->get();
        return $query->result();
    }
}
