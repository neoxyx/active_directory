<?php

class Dgsm_model extends CI_Model
{
    /*
    return all DGSMs.
    created by your name
    created at 27-04-21.
    */
    public function getAll()
    {
        return $this->db->get('DGSM')->result();
    }
    /*
    function for create DGSM.
    return DGSM inserted id.
    created by your name
    created at 27-04-21.
    */
    public function insert($data)
    {
        $this->db->insert('DGSM', $data);
        return $this->db->insert_id();
    }
    /*
    return DGSM by id.
    created by your name
    created at 27-04-21.
    */
    public function getDataById($id)
    {
        $this->db->where('IDENTIFICACION', $id);
        return $this->db->get('DGSM')->result();
    }
    /*
    function for update DGSM.
    return true.
    created by your name
    created at 27-04-21.
    */
    public function update($id, $data)
    {
        $this->db->where('IDENTIFICACION', $id);
        $this->db->update('DGSM', $data);
        return true;
    }
    /*
    function for delete DGSM.
    return true.
    created by your name
    created at 27-04-21.
    */
    public function delete($id)
    {
        $this->db->where('IDENTIFICACION', $id);
        $this->db->delete('DGSM');
        return true;
    }
}
