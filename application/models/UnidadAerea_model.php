<?php

class UnidadAerea_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('UnidadesAereas');
        $query = $this->db->get();
        return $query->result();
    }
}
