<?php

class ManageLoads extends CI_Model
{

    /*
return all Cargos.
created by your name
created at 28-04-21.
*/
    public function getAll()
    {
        return $this->db->get('View_Manejo_Cargos')->result();
    }
    /*
function for create Cargos.
return Dep inserted id.
created by your name
created at 28-04-21.
*/
    public function insert($data)
    {
        $this->db->insert('Manejo_Cargos', $data);
        return $this->db->insert_id();
    }
    /*
return Dep by id.
created by your name
created at 28-04-21.
*/
    public function getDataById($id, $cod2)
    {
        $this->db->where('CARGO', $id);
        $this->db->where('CARGO_AUTORIZA', $cod2);
        return $this->db->get('Manejo_Cargos')->result();
    }
    /*
function for update Dep.
return true.
created at 28-04-21.
*/
    public function update($id, $cod2, $data)
    {
        $this->db->where('COD_CARGO', $id);
        $this->db->where('COD_CARGO_AUTORIZA', $cod2);
        $this->db->update('Manejo_Cargos', $data);
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
