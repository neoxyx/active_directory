<?php

class SAMAFULL extends CI_Model
{

    /*
    return all SAMAFULLs.
    created by your name
    created at 29-04-21.
    */
    public function getAll()
    {
        return $this->db->get('SAMAFULL')->result();
    }
    /*
    function for create SAMAFULL.
    return SAMAFULL inserted id.
    created by your name
    created at 29-04-21.
    */
    public function insert($data)
    {
        $this->db->insert('SAMAFULL', $data);
        return $this->db->insert_id();
    }
    /*
    return SAMAFULL by id.
    created by your name
    created at 29-04-21.
    */
    public function getDataById($id)
    {
        $this->db->where('CONSECUTIVO', $id);
        return $this->db->get('SAMAFULL')->result();
    }
    /*
    return SAMAFULL by identificacion.
    created by your name
    created at 29-04-21.
    */
    public function getDataByIdentification($id)
    {
        $sql = "SELECT * FROM SAMAFULL s WHERE IDENTIFICACION = " . $id;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    /*
    function for update SAMAFULL.
    return true.
    created by your name
    created at 29-04-21.
    */
    public function update($id, $data)
    {
        $this->db->where('CONSECUTIVO', $id);
        $this->db->update('SAMAFULL', $data);
        return true;
    }
    /*
    function for delete SAMAFULL.
    return true.
    created by your name
    created at 29-04-21.
    */
    public function delete($id)
    {
        $this->db->where('CONSECUTIVO', $id);
        $this->db->delete('SAMAFULL');
        return true;
    }
    /*
    function for change status of SAMAFULL.
    return activated of deactivated.
    created by your name
    created at 29-04-21.
    */
    public function changeStatus($id)
    {
        $table = $this->getDataById($id);
        if ($table[0]->status == 0) {
            $this->update($id, array('status' => '1'));
            return "Activated";
        } else {
            $this->update($id, array('status' => '0'));
            return "Deactivated";
        }
    }
}
