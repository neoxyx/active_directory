<?php

class CategoriasNoUniformado_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('CategoriasNoUniformados');
        $query = $this->db->get();
        return $query->result();
    }
}