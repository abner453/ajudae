<?php

class Dashboard extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        _LoginAdm();
        
        _MontaMenuAdm();
    }
    //put your code here
    public function index()
    {
        $this->load->view($this->config->item('urlLayoutAdm'));
    }
}
