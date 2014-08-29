<div id="page-container" class="row">	
    <div id="page-content" class="col-sm-12">
        <div class="articles view">
            <h2><?php  echo __('Datos Artículo'); ?></h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td><strong><?php echo __('Artículo'); ?></strong></td>
                            <td><?php echo h($article['Article']['name']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Descripción'); ?></strong></td>
                            <td><?php echo h($article['Article']['description']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Cantidad'); ?></strong></td>
                            <td><?php echo h($article['Article']['amount']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Observaciones'); ?></strong></td>
                            <td><?php echo h($article['Article']['obs_amount']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Valor'); ?></strong></td>
                            <td><?php echo h($article['Article']['value']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Observaciones'); ?></strong></td>
                            <td><?php echo h($article['Article']['obs_value']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Capítulo'); ?></strong></td>
                            <td><?php echo $this->Html->link($article['Chapter']['name'], array('controller' => 'chapters', 'action' => 'view', $article['Chapter']['id']), array('class' => '')); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Unidad Medida'); ?></strong></td>
                            <td><?php echo $this->Html->link($article['MeasureUnit']['name'], array('controller' => 'measure_units', 'action' => 'view', $article['MeasureUnit']['id']), array('class' => '')); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Creado'); ?></strong></td>
                            <td><?php echo h($article['Article']['created']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Modificado'); ?></strong></td>
                            <td><?php echo h($article['Article']['modified']); ?>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group col-sm-3 col-sm-offset-5">
                    <?php echo $this->Html->link('Regresar','/articles', array('class' => 'btn btn-large btn-primary')); ?>
                </div>
            </div>
        </div>
    </div>
</div>
