<?php

class Usuario extends CI_Controller{
    
    var $funcionalidadeId = 5;
    
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
        $dados['titulo']              = 'Usuários';
        $dados['view']                = 'usuario/index';
        $dados['funcionalidadeAtiva'] = $this->funcionalidadeId;
        
        $this->load->view($this->config->item('urlLayoutAdm'), $dados);
    }
    
     public function Filtrar() {
        
        if($this->input->post('botaoLimpar') == 'limpar') {
            
            $dadosSessao = array('idUsuario', 'nomeUsuario', 'situacao');

            $this->session->unset_userdata($dadosSessao);
        }
        else {
           
            $dadosSessao = array();

            $dadosSessao['idUsuario']       = $this->input->post('idUsuario');
            $dadosSessao['nomeUsuario']     = $this->input->post('nomeUsuario');
            $dadosSessao['situacao'] = $this->input->post('situacao');

            $this->session->set_userdata($dadosSessao);
        }
        
        redirect(base_url($this->config->item('adm') . 'Usuario/index'));
    }
}
