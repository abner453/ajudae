<?php

class Dashboard extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _loginAdm();
    }
    //put your code here
    public function index()
    {
        echo '<pre>';print_r($this->session->userdata('nomeUsuario'));
    }
}
