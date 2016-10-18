<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model($this->config->item('adm') . 'usuariomodel');
    }
    //put your code here
    public function Index()
    {
        
        if(_loginAdm(false)) {
            
            redirect(base_url($this->config->item('adm') . 'dashboard'));
        }
        else {
            
            $this->load->view($this->config->item('adm') . 'login');
        }
    }
    
    public function Autenticar() {
        
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        
        $autenticou = $this->usuariomodel->Autenticar($email, $senha);
        
        if($autenticou) {
            
            $dadosUsuario = array(
                'dadosUsuario' => array(
                    'id'           => $autenticou->USU_ID,
                    'nomeCompleto' => $autenticou->USU_NOME_COMPLETO,
                    'email'        => $autenticou->USU_EMAIL
                ),
                'loginAdm' => true
            );
            
            $this->session->set_userdata($dadosUsuario);
            
            redirect(base_url($this->config->item('adm') . 'dashboard'));
        }
        else {
            
            $this->session->set_flashdata(
                array(
                    'msgDadosInvalidosLogin' => true,
                    'email' => $email
                )
            );
            
            redirect(base_url($this->config->item('adm') . 'login'));
        }
    }
}