<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuariomodel
 *
 * @author 12141001070
 */
class UsuarioModel extends CI_Model{
    
    var $tabela = 'usuario';
    
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
    
    public function Autenticar($login, $senha) {
        
        $this->db->from($this->tabela);
        
        $this->db->where('usuLogin', $login);
        $this->db->where('usuSenha', md5($senha));
        
        $resultado = $this->db->get();
        
        if($resultado->num_rows()){
            
            return $resultado->row(0);
        }
        else {
            
            return false;
        }
    }
}
