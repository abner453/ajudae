<?php

class FuncionalidadeModel extends CI_Model{
    
    var $tabela = 'FUNCIONALIDADE';
    
    public function BuscarPorId($id) {
        
        $this->db->select('f.*, GROUP_CONCAT(GRU_ID) as grupos');
        
        $this->db->from($this->tabela . ' as f');
        
        $this->db->join('FUNCIONALIDADE_GRUPO as fm', 'fm.FUN_ID = f.FUN_ID');
        
        $this->db->where('f.FUN_ID', $id);
        
        $this->db->group_by('f.FUN_ID');
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->row(0);
        }
        else {
            
            return false;
        }
    }
}
