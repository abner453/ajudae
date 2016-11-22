<div class="row">
    <div class="col-lg-12">
        <section class="panel">
             <header class="panel-heading" style="padding: 5px;">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo form_open($this->config->item('adm') . 'usuario/filtrar', array('class' => 'form-inline'));?>
                        <div class="form-group">
                            <input type="text" class="form-control" id="idUsuario" placeholder="Id" name="idUsuario" value="<?php echo $this->session->userdata('idUsuario');?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome" name="nomeUsuario" value="<?php echo $this->session->userdata('nomeUsuario');?>">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" id="situacao" placeholder="situacao" name="situacao" value="<?php echo $this->session->userdata('situacao');?>">
                        </div>
                        <button type="submit" class="btn btn-default" value="filtrar" name="botaoFiltro">Filtrar</button>
                        <button type="submit" class="btn btn-warning" value="limpar" name="botaoLimpar">Limpar</button>
                        <?php echo form_close();?>
                    </div>
                </div>
            </header>
                Usuários Cadastrados
              <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Situação</th>
                        </tr>
                    </thead>
                 
                </table>
            </div>

        </section>
    </div>
</div>