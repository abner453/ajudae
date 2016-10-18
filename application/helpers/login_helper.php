<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_loginAdm'))
{
    function _loginAdm($redirecionar = true)
    {
        
        $CI = &get_instance();
        if($CI->session->userdata('loginAdm')) {
            
            return true;
        }
        else {
            
            if($redirecionar) {
                
                redirect(base_url($CI->config->item('adm') . 'Login'));
            }
            else {
                
                return false;
            }
        }
    }
}

