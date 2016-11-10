<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="<?php echo ($funcionalidadeAtiva == 0) ? 'active' : '';?>">
                <a class="" href="<?php echo base_url($this->config->item('adm') . 'dashboard');?>">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php
            
            $dadosMenu = $this->session->userdata('menu');
            
            foreach ($dadosMenu as $menu) {
                
                $htmlFuncionalidades = '';
                $classeAtivoMenu = '';
                
                foreach ($menu['funcionalidades'] as $funcionalidade) {
                    
                    $classeAtivoFuncionalidade = '';
                    if($funcionalidadeAtiva == $funcionalidade['id']) {
                        
                        $classeAtivoFuncionalidade = 'active';
                        $classeAtivoMenu = 'active';
                    }
                    
                    $link = base_url($this->config->item('adm') . $funcionalidade['url']);
                    $nome = $funcionalidade["nome"];
                    
                    $htmlFuncionalidades .= '<li class="' .  $classeAtivoFuncionalidade . '>"><a href="' .  $link . '">' . $nome . '</a></li>';
                }
                ?>
            
                <li class="sub-menu <?php echo $classeAtivoMenu;?>">
                    <a href="javascript:;" class="">
                        <i class="<?php echo $menu['iconeModulo'];?>"></i>
                        <span><?php echo $menu['nomeModulo'];?></span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <?php echo $htmlFuncionalidades;?>
                    </ul>
                </li>
            <?php } ?>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->