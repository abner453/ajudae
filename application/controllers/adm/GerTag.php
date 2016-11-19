<?php

class GerTag extends CI_Controller{
    
    var $funcionalidadeId = 1;
    var $limitePaginacao  = 10;
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        _PermissaoAdmFuncionalidade($this->funcionalidadeId);
        
        _MontaMenuAdm();
        
        $this->load->model($this->config->item('adm') . 'tagmodel');
    }
    //put your code here
    public function index($de=0)
    {
        
        $dados                        = array();
        $dados['titulo']              = 'Gerenciar TAGs';
        $dados['view']                = 'gerTag/index';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        
        //$clausulas = $this->MontaClausulas();
        
        $dados['tags'] = $this->tagmodel->BuscarTodos();
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
    
    private function MontaClausulas() {
        
        $retorno = array();
        
//        if(!empty($this->session->userdata('idGerTag'))) {
//            
//            $retorno['TAG_ID'] = $this->session->userdata('idGerTag');
//        }
//        
//        if(!empty($this->session->userdata('nomeGerTag'))) {
//            
//            $retorno['TAG_NOME'] = 'like %' . $this->session->userdata('nomeGerTag') . '%';
//        }
//        
//        if(!empty($this->session->userdata('cadastroGerTag'))) {
//            
//            if($this->session->userdata('cadastroGerTag') == 'adm') {
//                
//                $retorno['TAG_CADASTRO_SITE'] = 0;
//            }
//            else {
//                
//                $retorno['TAG_CADASTRO_SITE'] = 1;
//            }
//        }
//        
//        if(!empty($this->session->userdata('dataGerTag'))) {
//            
//            $retorno['TAG_DATA_REGISTRO'] = $this->session->userdata('dataGerTag');
//        }
        
        return $retorno;
    }
}
