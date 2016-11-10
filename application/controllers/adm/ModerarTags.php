<?php

class ModerarTags extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados                        = array();
        $dados['titulo']              = 'Moderar tags';
        $dados['view']                = 'moderarTags/index';
        $dados['funcionalidadeAtiva'] = 2;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
