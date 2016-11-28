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
            
        $clausulas = $this->MontaClausulas();
        $dados['tags'] = $this->tagmodel->BuscarComClausulas($clausulas, $de, $this->limitePaginacao);
        
        $dados['paginacao'] = _montaPaginacao('gerTag/index', 4, $this->tagmodel->QuantidadeComClausulas($clausulas), $this->limitePaginacao);
        
        $dados['assetsPlugin'][] = 'inputMask/inputmask.js';
        $dados['assetsPlugin'][] = 'inputMask/inputmask.date.extensions.js';
        $dados['assetsPlugin'][] = 'inputMask/jquery.inputmask.js';
        
        $dados['assetsAjax'][] = 'GerTag.js';
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
    
    private function MontaClausulas() {
        
        $retorno = array();
        
        if($this->session->userdata('idGerTag')) {
            
            $retorno['TAG_ID'] = $this->session->userdata('idGerTag');
        }
        
        if($this->session->userdata('nomeGerTag')) {
            
            $retorno['TAG_NOME like '] = '%' . $this->session->userdata('nomeGerTag') . '%';
        }
        
        if($this->session->userdata('cadastroGerTag')) {
            
            if($this->session->userdata('cadastroGerTag') == 'app') {
                
                $retorno['TAG_CADASTRO_SITE'] = 0;
            }
            else {
                
                $retorno['TAG_CADASTRO_SITE'] = 1;
            }
        }
        
        if($this->session->userdata('dataGerTag')) {
            
            $retorno['TAG_DATA_REGISTRO >= '] = _ConverteDataPorEng($this->session->userdata('dataGerTag')) . ' 00:00:00';
            $retorno['TAG_DATA_REGISTRO <= '] = _ConverteDataPorEng($this->session->userdata('dataGerTag')) . ' 23:59:59';
        }
        
        return $retorno;
    }
    
    public function Filtrar() {
        
        if($this->input->post('botaoLimpar') == 'limpar') {
            
            $dadosSessao = array('idGerTag', 'nomeGerTag', 'cadastroGerTag', 'dataGerTag');

            $this->session->unset_userdata($dadosSessao);
        }
        else {
           
            $dadosSessao = array();

            $dadosSessao['idGerTag']       = $this->input->post('idGerTag');
            $dadosSessao['nomeGerTag']     = $this->input->post('nomeGerTag');
            $dadosSessao['cadastroGerTag'] = $this->input->post('cadastroGerTag');
            $dadosSessao['dataGerTag']     = $this->input->post('dataGerTag');

            $this->session->set_userdata($dadosSessao);
        }
        
        redirect(base_url($this->config->item('adm') . 'gerTag/index'));
    }
    
    public function nova() {
        
        $dados                        = array();
        $dados['titulo']              = 'Gerenciar TAGs';
        $dados['view']                = 'gerTag/editar';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        
        $dados['assetsAjax'][] = 'GerTag.js';
        
        $dados['urlSalvar'] = base_url($this->config->item('adm') . 'gerTag/salvar');
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
}
