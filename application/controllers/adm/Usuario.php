<?php

class Usuario extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados           = array();
        $dados['titulo'] = 'Usuários';
        $dados['view']   = $this->config->item('adm') . 'usuario/index';
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
