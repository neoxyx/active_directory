<?php

class ManageCards extends CI_Model
{

    /*
return all Cargos.
created by your name
created at 28-04-21.
*/
    public function getAll()
    {
        return $this->db->get('View_TabTarjetasActivas')->result();
    }
    /*
function for create Cargos.
return TabTarjetas inserted id.
created by your name
created at 28-04-21.
*/
    public function insert($data)
    {
        $this->db->insert('TabTarjetas', $data);
        return $this->db->insert_id();
    }
    /*
return TabTarjetas by id.
created by your name
created at 28-04-21.
*/
    public function getDataById($id)
    {
        $this->db->where('tarjeta', $id);
        return $this->db->get('TabTarjetas')->result();
    }
    /*
function for update TabTarjetas.
return true.
created at 28-04-21.
*/
    public function update($id, $data)
    {
        $this->db->where('tarjeta', $id);
        $this->db->update('TabTarjetas', $data);
        return true;
    }
    /*
function for delete TabTarjetas.
return true.
created by your name
created at 28-04-21.
*/
    public function delete($id)
    {
        $this->db->where('tarjeta', $id);
        $this->db->delete('TabTarjetas');
        return true;
    }
}
