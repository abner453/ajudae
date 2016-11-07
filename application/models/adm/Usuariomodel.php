<?php

class UsuarioModel extends CI_Model{
    
    var $tabela = 'USUARIO';
    
    public function BuscarTodos() {
        
        $this->db->from($this->tabela);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->result();
        }
        else {
            
            return false;
        }
    }
    
    public function Autenticar($email, $senha) {
        
        $this->load->config('grupos');
        
        $gruposId = $this->config->item('gruposId');
        
        $this->db->from($this->tabela);
        
        $this->db->where('usu_email', $email);
        $this->db->where('usu_senha', md5($senha));
        $this->db->where('usu_ativo', true);
        $this->db->where('usu_gru_id', $gruposId['adm']);
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->row(0);
        }
        else {
            
            return false;
        }
    }
}
