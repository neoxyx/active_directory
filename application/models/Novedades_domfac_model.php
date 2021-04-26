<?php

class Novedades_domfac_model extends CI_Model
{

    public function getColumns()
    {
        $this->db->select('COLUMN_NAME');
        $this->db->from('INFORMATION_SCHEMA.COLUMNS');
        $this->db->where('TABLE_NAME','Novedades_domFac');
        $query = $this->db->get();
        return $query->result();
    }


    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('Novedades_domFac');
        $query = $this->db->get();
        return $query->result();
    }
}
