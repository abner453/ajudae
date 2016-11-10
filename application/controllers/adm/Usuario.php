<?php

class Usuario extends CI_Controller{
    
    var $funcionalidadeId = 5;
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        _PermissaoAdmFuncionalidade($this->funcionalidadeId);
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados                        = array();
        $dados['titulo']              = 'Usuários';
        $dados['view']                = 'usuario/index';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
