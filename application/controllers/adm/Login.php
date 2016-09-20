<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author 12141001070
 */
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model($this->config->item('adm') . 'usuariomodel');
    }
    //put your code here
    public function index()
    {
        $autenticou = $this->usuariomodel->Autenticar('adm', '123');
        
        if($autenticou) {
            
            $dadosUsuario = array(
                'nomeUsuario' => $autenticou->usuLogin,
                'loginAdm'    => true
            );
            
            $this->session->set_userdata($dadosUsuario);
            
            redirect($this->config->item('adm') . 'dashboard');
        }
        else {
            
            echo 'You lose!';
        }
    }
}