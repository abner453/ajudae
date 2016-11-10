<?php

class TagModel extends CI_Model{
    
    var $tabela = 'TAG';
    
    public function BuscarPorId($id) {
        
        $this->db->from($this->tabela);
        
        $this->db->where('TAG_ID', $id);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->row(0);
        }
        else {
            
            return false;
        }
    }
    
    public function BuscarTodos() {
        
        $this->db->from($this->tabela);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->result();
        }
        else {
            
            return array();
        }
    }
}
