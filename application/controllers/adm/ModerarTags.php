<?php

class ModerarTags extends CI_Controller{
    
    var $funcionalidadeId = 2;
    
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
        $dados['titulo']              = 'Moderar tags';
        $dados['view']                = 'moderarTags/index';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
