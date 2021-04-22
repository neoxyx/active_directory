<?php

class Denuncias_model extends CI_Model
{

    public function get_denuncias()
    {
        $this->db->select('*,CategoriasNoUniformados.Categoria as CategoriaNoUniformado,CategoriasOficiales.Categoria as CategoriaOficial,CategoriasSuboficiales.Categoria as CategoriaSuboficial');
        $this->db->from('Denuncias');
        $this->db->join('CategoriasNoUniformados', 'CategoriasNoUniformados.Id = Denuncias.IdCategoriaNoUniformado');
        $this->db->join('CategoriasOficiales', 'CategoriasOficiales.Id = Denuncias.IdCategoriaOficial');
        $this->db->join('CategoriasSuboficiales', 'CategoriasSuboficiales.Id = Denuncias.IdCategoriaSuboficial');
        $this->db->join('Comandos', 'Comandos.Id = Denuncias.IdComando');
        $this->db->join('Escenarios', 'Escenarios.Id = Denuncias.IdEscenario');
        $this->db->join('Procesos', 'Procesos.Id = Denuncias.IdProceso');
        $this->db->join('UnidadesAereas', 'UnidadesAereas.Id = Denuncias.IdUnidadAerea');
        $query = $this->db->get();
        return $query->result();
    }

    public function create($data)
    {
        $this->db->insert('Denuncias', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
