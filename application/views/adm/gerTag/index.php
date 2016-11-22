<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style="padding: 5px;">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo form_open($this->config->item('adm') . 'gerTag/filtrar', array('class' => 'form-inline'));?>
                        <div class="form-group">
                            <input type="text" class="form-control" id="idGerTag" placeholder="Id" name="idGerTag" value="<?php echo $this->session->userdata('idGerTag');?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nomeGerTag" placeholder="Nome" name="nomeGerTag" value="<?php echo $this->session->userdata('nomeGerTag');?>">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" id="cadastroGerTag" name="cadastroGerTag" value="adm" <?php echo ($this->session->userdata('cadastroGerTag') == 'adm') ?  'checked' : '';?>> Cadastro no site
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio"  id="cadastroGerTag" name="cadastroGerTag" value="app" <?php echo ($this->session->userdata('cadastroGerTag') == 'app') ?  'checked' : '';?>> Cadastro na administração
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="dataGerTag" placeholder="Data Cadastro" name="dataGerTag" value="<?php echo $this->session->userdata('dataGerTag');?>">
                        </div>
                        <button type="submit" class="btn btn-default" value="filtrar" name="botaoFiltro">Filtrar</button>
                        <button type="submit" class="btn btn-warning" value="limpar" name="botaoLimpar">Limpar</button>
                        <?php echo form_close();?>
                    </div>
                </div>
            </header>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Cadastro</th>
                            <th>Data cadastro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tags as $tag) {
                            
                            $classeLabel = 'success';
                            $textoLabel  = 'Administração';
                            
                            if($tag->TAG_CADASTRO_SITE) {
                                
                                $classeLabel = 'primary';
                                $textoLabel  = 'Site';
                            }
                            ?>
                        
                            <tr>
                                <td><?php echo $tag->TAG_ID;?></td>
                                <td><?php echo $tag->TAG_NOME;?></td>
                                <td><span class="label label-<?php echo $classeLabel;?>"><?php echo $textoLabel;?></span></td>
                                <td><?php echo date('d/m/Y H:i:s', strtotime($tag->TAG_DATA_REGISTRO));?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </section>
    </div>
</div>