<?php

class Casos_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('Casos', $data);
        $insertId = $this->db->insert_id();
        return  $insertId;
    }
}
