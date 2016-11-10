<!DOCTYPE html>
<html lang="pt-Br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ajudaê">
        <meta name="author" content="Abner, Aline, Josias, Matheus, Maykon">
        <meta name="keyword" content="Ajudae">
        <link rel="shortcut icon" href="<?php echo base_url($this->config->item('templateAdm') . 'img/favicon.png');?>">

        <title><?php echo $this->config->item('tituloAdm');?></title>

        <!-- Bootstrap CSS -->    
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/bootstrap.min.css');?>" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/bootstrap-theme.css');?>" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/elegant-icons-style.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/font-awesome.min.css');?>" rel="stylesheet" />    

        <!-- Custom styles -->
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/widgets.css');?>" rel="stylesheet">
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/style.css');?>" rel="stylesheet">
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/style-responsive.css');?>" rel="stylesheet" />	
        <link href="<?php echo base_url($this->config->item('templateAdm') . 'css/jquery-ui-1.10.4.min.css');?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- container section start -->
        <section id="container" class="">


            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
                </div>

                <!--logo start-->
                <a href="index.html" class="logo">AJUDAÊ</a>
                <!--logo end-->

                <div class="top-nav notification-row">                
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">
                        
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="" src="<?php echo _fotoPerfil(_IdUsuarioLogado());?>" height="35px">
                                </span>
                                <span class="username"><?php echo _NomeSobrenomeUsuarioLogado();?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="#"><i class="icon_profile"></i> Meu perfil</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_key_alt"></i> Sair</a>
                                </li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>      
            <!--header end-->

            <?php $this->load->view($this->config->item('urlPastaTemplateAdm') . 'menu');?>

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">            
                    <!--overview start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-laptop"></i> <?php echo $titulo;?></h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
                            </ol>
                        </div>
                    </div>
                    
                    <?php $this->load->view($this->config->item('adm') . $view);?>

                </section>
            </section>
            <!--main content end-->
        </section>
        <!-- container section start -->

        <!-- javascripts -->
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery-ui-1.10.4.min.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery-1.8.3.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery-ui-1.9.2.custom.min.js');?>"></script>
        <!-- bootstrap -->
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/bootstrap.min.js');?>"></script>
        <!-- nice scroll -->
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.scrollTo.min.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.nicescroll.js');?>" type="text/javascript"></script>

        <!--script for this page only-->
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.rateit.min.js');?>"></script>

        <!--custome script for all page-->
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/scripts.js');?>"></script>
        <!-- custom script for this page-->
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.autosize.min.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.placeholder.min.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/gdp-data.js');?>"></script>	
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/morris.min.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/sparklines.js');?>"></script>
        <script src="<?php echo base_url($this->config->item('templateAdm') . 'js/jquery.slimscroll.min.js');?>"></script>

    </body>
</html>