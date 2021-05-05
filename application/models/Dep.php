<?php

class Dep extends CI_Model
{

    /*
return all Deps.
created by your name
created at 28-04-21.
*/
    public function getAll()
    {
        return $this->db->get('Dep')->result();
    }
    /*
function for create Dep.
return Dep inserted id.
created by your name
created at 28-04-21.
*/
    public function insert($data)
    {
        $this->db->insert('Dep', $data);
        return $this->db->insert_id();
    }
    /*
return Dep by id.
created by your name
created at 28-04-21.
*/
    public function getDataById($id)
    {
        $this->db->where('CONSECUTIVO', $id);
        return $this->db->get('Dep')->result();
    }
    /*
function for update Dep.
return true.
created at 28-04-21.
*/
    public function update($id, $data)
    {
        $this->db->where('CONSECUTIVO', $id);
        $this->db->update('Dep', $data);
        return true;
    }
    /*
function for delete Dep.
return true.
created by your name
created at 28-04-21.
*/
    public function delete($id)
    {
        $this->db->where('CONSECUTIVO', $id);
        $this->db->delete('Dep');
        return true;
    }
    /*
function for change status of Dep.
return activated of deactivated.
created by your name
created at 28-04-21.
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
