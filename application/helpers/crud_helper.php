<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_montaPaginacao'))
{
    function _montaPaginacao($url, $uriSegment, $totalProdutos, $porPagina) {
        
        $CI = &get_instance();
        
        $config_paginacao                     = $CI->config->item('paginacao');
        $config_paginacao['base_url']         = base_url($CI->config->item('adm') . $url);
        $config_paginacao['uri_segment']      = $uriSegment;
        $config_paginacao['total_rows']       = $totalProdutos;        
        $config_paginacao['per_page']         = $porPagina;
        
        $CI->pagination->initialize($config_paginacao);
        
        return $CI->pagination->create_links();
    }
}