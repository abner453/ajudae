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
    
    public function BuscarTodos($de = 0, $limite = 10) {
        
        $this->db->from($this->tabela);
        
        $this->db->limit($limite, $de);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->result();
        }
        else {
            
            return array();
        }
    }
    
    public function QuantidadeTodos() {
        
        $this->db->from($this->tabela);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->num_rows();
        }
        else {
            
            return 0;
        }
    }
    
    public function BuscarComClausulas($clausulas, $de, $limite) {
        
        $this->db->from($this->tabela);
        
        $this->db->where($clausulas);
        
        $this->db->limit($limite, $de);
        
        $resultado = $this->db->get();
      
        if($resultado->current_row){
            die($resultado->num_rows());
            return $resultado->result();
        }
        else {
            
            return array();
        }
    }
    
     public function QuantidadeComClausulas($clausulas) {
        
        $this->db->from($this->tabela);
        
        $this->db->where($clausulas);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->num_rows();
        }
        else {
            
            return 0;
        }
    }
}
