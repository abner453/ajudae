<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="index.html">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php
            $dadosMenu = $this->session->userdata('menu');
            
            foreach ($dadosMenu as $menu) {?>
            
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="<?php echo $menu['iconeModulo'];?>"></i>
                        <span><?php echo $menu['nomeModulo'];?></span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <?php foreach ($menu['funcionalidades'] as $funcionalidade) { ?>
                        
                            <li><a class="" href="<?php echo base_url($this->config->item('adm') . $funcionalidade['url'])?>"><?php echo $funcionalidade['nome']?></a></li>                          
                        <?php }?>
                    </ul>
                </li>
            <?php } ?>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->