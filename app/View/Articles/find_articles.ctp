<div id="page-container" class="row">
    <div id="page-content" class="col-sm-12">
        <h2><?php echo __('Buscar Artículo'); ?></h2>
        <hr> 
        <div class="articles form">
             <?php echo $this->Form->create('Article', array('role' => 'form')); ?>
            <fieldset>
                <div class="form-group col-sm-5">
                     <div class="form-group">
                        <?php echo $this->Form->input('name', array('value' => '', 'label' => false, 'placeholder' => 'Artículo', 'class' => 'form-control')); ?>
                    </div>
                </div>
                 <div class="form-group col-sm-6">
                        <div class="form-group col-sm-3">
                            <?php echo $this->Js->submit('Buscar', array(
                                'before'=>$this->Js->get('#checking')->effect('fadeIn'),
                                'success'=>$this->Js->get('#checking')->effect('fadeOut'),
                                'update'=>'#choose_options',
                                'class' => 'btn btn-large btn-primary')
                                )
                            ;?> 
                        </div>       
                    </div>
            </fieldset>    

            <?php echo $this->Form->end();?>
        </div>
    </div>
    <div id="choose_options" class="col-sm-12">
    
    </div>
</div> 