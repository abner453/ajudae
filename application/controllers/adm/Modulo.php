<?php

class Modulo extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados                        = array();
        $dados['titulo']              = 'Módulos';
        $dados['view']                = 'modulo/index';
        $dados['funcionalidadeAtiva'] = 3;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
