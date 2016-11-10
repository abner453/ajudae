<?php

class GerTag extends CI_Controller{
    
    var $funcionalidadeId = 1;
    
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
        $dados['titulo']              = 'Gerenciar TAGs';
        $dados['view']                = 'gerTag/index';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
