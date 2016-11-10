<?php

class GerTag extends CI_Controller{
    
    var $funcionalidadeId = 1;
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        _PermissaoAdmFuncionalidade($this->funcionalidadeId);
        
        _MontaMenuAdm();
        
        $this->load->model($this->config->item('adm') . 'tagmodel');
    }
    //put your code here
    public function index()
    {
        
        $dados                        = array();
        $dados['titulo']              = 'Gerenciar TAGs';
        $dados['view']                = 'gerTag/index';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        $dados['tags']                = $this->tagmodel->BuscarTodos();
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
