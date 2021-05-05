<?php

class GroupLoads_model extends CI_Model
{

    /*
    return all GrouLoads.
    created by your name
    created at 27-04-21.
    */
    public function getAll()
    {
        return $this->db->get('Grupo_Cargos')->result();
    }
    /*
    function for create ADF.
    return ADF inserted id.
    created by your name
    created at 27-04-21.
    */
    public function insert($data)
    {
        $this->db->insert('Grupo_Cargos', $data);
        return $this->db->insert_id();
    }
    /*
    return ADF by id.
    created by your name
    created at 27-04-21.
    */
    public function getDataById($id)
    {
        $this->db->where('CARGO', $id);
        return $this->db->get('Grupo_Cargos')->result();
    }
    /*
    function for update ADF.
    return true.
    created by your name
    created at 27-04-21.
    */
    public function update($id, $data)
    {
        $this->db->where('CARGO', $id);
        $this->db->update('Grupo_Cargos', $data);
        return true;
    }
    /*
    function for delete ADF.
    return true.
    created by your name
    created at 27-04-21.
    */
    public function delete($id)
    {
        $this->db->where('CARGO', $id);
        $this->db->delete('Grupo_Cargos');
        return true;
    }
}
