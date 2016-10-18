<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url($this->config->item('templateAdm') . 'img/favicon.png');?>">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/bootstrap-theme.css');?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/elegant-icons-style.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/font-awesome.css');?>" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/style-responsive.css');?>" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
    <div class="container">

    <form class="login-form" action="<?php echo base_url($this->config->item('adm') . 'login/Autenticar');?>" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            
            <?php
            if($this->session->flashdata('msgDadosInvalidosLogin')) {
                
                echo '
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                    Login ou senha inválidos!
                </div>';
            }
            ?>
            
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="E-mail" autofocus name="email" value="<?php echo $this->session->flashdata('email');?>">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Senha" name="senha">
            </div>
            <label class="checkbox">
                <span class="pull-right"> <a href="#"> Esqueceu sua senha?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
        </div>
      </form>

    </div>
  </body>
</html>
