<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_ConverteDataPorEng'))
{
    function _ConverteDataPorEng($dataPor) {
        
        $data = explode('/', $dataPor);
        
        $dataEng = $data[2] . '-' . $data[1] . '-' . $data[0];
        
        return($dataEng);
    }
}