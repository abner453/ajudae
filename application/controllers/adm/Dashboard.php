<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author 12141001070
 */
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
