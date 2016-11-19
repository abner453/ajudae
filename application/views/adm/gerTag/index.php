<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style="padding: 5px;">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-default">Filtrar</button>
                    </div>
                </div>
            </header>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
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
                                <td>1</td>
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