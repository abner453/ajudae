<?php

class Pergunta extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $dados           = array();
        $dados['titulo'] = 'Perguntas';
        $dados['view']   = $this->config->item('adm') . 'pergunta/index';
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
