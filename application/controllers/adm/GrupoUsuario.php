<?php

class GrupoUsuario extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados                        = array();
        $dados['titulo']              = 'Grupos de usuário';
        $dados['view']                = 'grupoUsuario/index';
        $dados['funcionalidadeAtiva'] = 6;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}