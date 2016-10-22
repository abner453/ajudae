<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_montaMenuAdm'))
{
    function _montaMenuAdm()
    {
        
        $CI = &get_instance();
        $CI->load->model($CI->config->item('adm') . 'menumodel');
    }
}