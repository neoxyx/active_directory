<?php

class Adf_model extends CI_Model
{

    /*
    return all ADFs.
    created by your name
    created at 27-04-21.
    */
    public function getAll()
    {
        return $this->db->get('ADF')->result();
    }
    /*
    function for create ADF.
    return ADF inserted id.
    created by your name
    created at 27-04-21.
    */
    public function insert($data)
    {
        $this->db->insert('ADF', $data);
        return $this->db->insert_id();
    }
    /*
    return ADF by id.
    created by your name
    created at 27-04-21.
    */
    public function getDataById($id)
    {
        $this->db->where('employeeID', $id);
        return $this->db->get('ADF')->result();
    }
    /*
    function for update ADF.
    return true.
    created by your name
    created at 27-04-21.
    */
    public function update($id, $data)
    {
        $this->db->where('employeeID', $id);
        $this->db->update('ADF', $data);
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
        $this->db->where('employeeID', $id);
        $this->db->delete('ADF');
        return true;
    }
}
