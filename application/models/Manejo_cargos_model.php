<?php

class Manejo_cargos_model extends CI_Model
{
    public function getColumns()
    {
        $this->db->select('COLUMN_NAME');
        $this->db->from('INFORMATION_SCHEMA.COLUMNS');
        $this->db->where('TABLE_NAME','Manejo_Cargos');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('Manejo_Cargos');
        $query = $this->db->get();
        return $query->result();
    }
}
