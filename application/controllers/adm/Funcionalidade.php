<?php

class Funcionalidade extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados                        = array();
        $dados['titulo']              = 'Funcionalides';
        $dados['view']                = 'funcionalidade/index';
        $dados['funcionalidadeAtiva'] = 4;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
