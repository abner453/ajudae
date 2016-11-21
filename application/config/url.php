<?php

$config['adm']                 = 'adm/';
$config['templateAdm']         = 'templates/' . $config['adm'];
$config['urlPastaTemplateAdm'] = '../../' . $config['templateAdm'];
$config['urlLayoutAdm']        = $config['urlPastaTemplateAdm'] . 'layout';

$config['assets']             = 'assets/';
$config['assetsArquivos']     = $config['assets'] . 'arquivos/';
$config['urlArquivosPerfil']  = $config['assetsArquivos'] . 'fotoPerfil/';
$config['urlArquivosDefault'] = $config['assetsArquivos'] . 'default/';
$config['assetsJavascript']   = $config['assets'] . 'javascript/';
$config['assetsPlugins']      = $config['assetsJavascript'] . 'plugins/';
$config['assetsAjax']         = $config['assetsJavascript'] . 'ajax/';
$config['assetsAjaxAdm']      = $config['assetsAjax'] . 'adm/';