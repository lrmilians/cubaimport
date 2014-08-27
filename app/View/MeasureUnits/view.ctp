<div id="page-container" class="row">	
    <div id="page-content" class="col-sm-12">
        <div class="measureUnits view">
            <h2><?php  echo __('Datos Unidad Medida'); ?></h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td><strong><?php echo __('Unidad Medida'); ?></strong></td>
                            <td><?php echo h($measureUnit['MeasureUnit']['name']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Creado'); ?></strong></td>
                            <td><?php echo h($measureUnit['MeasureUnit']['created']); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong><?php echo __('Modificado'); ?></strong></td>
                            <td><?php echo h($measureUnit['MeasureUnit']['modified']); ?>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group col-sm-3 col-sm-offset-5">
                    <?php echo $this->Html->link('Regresar','/measure_units', array('class' => 'btn btn-large btn-primary')); ?>
                </div>
            </div>
        </div>			
    </div>
</div>
