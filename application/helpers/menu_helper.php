<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_montaMenuAdm'))
{
    function _MontaMenuAdm() {
        
        $CI = &get_instance();
        $CI->load->model($CI->config->item('adm') . 'modulomodel');
        
        $dadosMenu = $CI->modulomodel->DadosMenu();
        
        $CI->session->set_userdata('menu', $dadosMenu);
    }
}