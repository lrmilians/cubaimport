<div id="page-container" class="row">
    <div id="page-content" class="col-sm-12">
        <h2><?php echo __('Adicionar Artículo'); ?></h2>
        <hr>
        <div class="articles form">
            <?php echo $this->Form->create('Article', array('role' => 'form')); ?>
                <fieldset>
                    <div class="form-group col-sm-6">
                        <div class="form-group">
                                <?php echo $this->Form->input('name', array('label' => 'Artículo *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                                <?php echo $this->Form->input('amount', array('label' => 'Cantidad *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                                <?php echo $this->Form->input('obs_amount', array('label' => 'Observaciones', 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="form-group">
                                <?php echo $this->Form->input('value', array('label' => 'Valor *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                                <?php echo $this->Form->input('obs_value', array('label' => 'Observaciones *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                                <?php echo $this->Form->input('chapter_id', array('label' => 'Capítulo', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                                <?php echo $this->Form->input('measure_unit_id', array('label' => 'U/M', 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="form-group col-sm-3 col-sm-offset-4">
                            <?php echo $this->Form->submit('Aceptar', array('class' => 'btn btn-large btn-primary')); ?>
                        </div>   
                        <div class="form-group col-sm-3" >
                            <?php echo $this->Html->link('Cancelar','/articles', array('class' => 'btn btn-large btn-danger')); ?>
                        </div>     
                    </div>
                </fieldset>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>