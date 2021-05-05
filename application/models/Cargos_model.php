<?php

class Cargos_model extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('View_CARGOS');
        $query = $this->db->get();
        return $query->result();
    }

    public function getColumns()
    {
        $this->db->select('COLUMN_NAME');
        $this->db->from('INFORMATION_SCHEMA.COLUMNS');
        $this->db->where('TABLE_NAME','View_CARGOS');
        $query = $this->db->get();
        return $query->result();
    }
}
