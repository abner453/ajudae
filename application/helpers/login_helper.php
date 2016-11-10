<?php defined('BASEPATH') OR exit('No direct script access allowed');
function _LoginAdm($redirecionar = true)
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

function _NomeSobrenomeUsuarioLogado() {

    $CI = &get_instance();
    $dadosUsuario = $CI->session->userdata('dadosUsuario');

    $nome = explode(' ', $dadosUsuario['nomeCompleto']);

    $retorno = $nome[0];

    if(count($nome) > 1) {

        $retorno .= ' ' . $nome[count($nome)-1];
    }

    return $retorno;
}

function _fotoPerfil($idUsuario) {

    $CI = & get_instance();

    $imagens = $CI->config->item('urlArquivosPerfil');

    if (is_dir($imagens)) {

        $diretorio = dir($imagens);
        $foto = '';

        while ($arquivo = $diretorio->read()) {

            if (substr($arquivo, 0, 5) == $idUsuario . '.') {

                $foto = $arquivo;
                break;
            }
        }
        $diretorio->close();

        if ($foto != '') {

            $foto = $imagens . $foto;
        } else {

            $foto = $CI->config->item('urlArquivosDefault') . 'fotoPerfil.jpg';
        }
    } else {

        $foto = $CI->config->item('urlArquivosDefault') . 'fotoPerfil.jpg';
    }

    return base_url($foto);
}

function _IdUsuarioLogado() {

    $CI = &get_instance();
    $dadosUsuario = $CI->session->userdata('dadosUsuario');

    return $dadosUsuario['id'];
}

function _PermissaoAdmFuncionalidade($funcionalidadeId)
{

    $CI = &get_instance();
    $dadosUsuario = $CI->session->userdata('dadosUsuario');
    
    $CI->load->model($CI->config->item('adm') . 'funcionalidademodel');
    
    $dadosFuncionalidade = $CI->funcionalidademodel->BuscarPorId($funcionalidadeId);
    
    $permitido = false;
    
    if(isset($dadosFuncionalidade->grupos)) {
        
        $grupos = explode(',', $dadosFuncionalidade->grupos);
        
        if(in_array($dadosUsuario['grupo'], $grupos)) {
            
            $permitido = true;
        }
    }
    
    if(!$permitido) {
        
        redirect($CI->config->item('adm') . 'permissaoNegada');
    }
}