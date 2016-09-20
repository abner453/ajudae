<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_loginAdm'))
{
    function _loginAdm()
    {
        
        $CI = &get_instance();
        if($CI->session->userdata('loginAdm')) {
            
            return true;
        }
        else {
            
            redirect(base_url($CI->config->item('adm') . 'Login'));
        }
    }
}

