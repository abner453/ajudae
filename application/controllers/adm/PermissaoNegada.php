<?php

class PermissaoNegada extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        
        $dados                        = array();
        $dados['titulo']              = 'Permissão Negada';
        $dados['view']                = 'permissaoNegada';
        $dados['funcionalidadeAtiva'] = 0;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
