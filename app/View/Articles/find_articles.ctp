<div id="page-container" class="row">
    <div id="page-content" class="col-sm-12">
        <h2><?php echo __('Buscar Artículo'); echo $this->Html->image('loading.gif', array('id'=>'busy-indicator'));?></h2>
        <hr> 
        <div class="articles form">
             <?php echo $this->Form->create('Article', array('role' => 'form')); ?>
            <fieldset>
                <div class="form-group col-sm-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('chapter_id', array('value' => '', 'label' => false, 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('name', array('value' => '', 'label' => false, 'placeholder' => 'Escriba un artículo', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="form-group col-sm-2">
                    <?php echo $this->Js->submit('Buscar', array(
                        'before'=> $this->Js->get('#busy-indicator')->effect('fadeIn'),
                        'success'=> $this->Js->get('#busy-indicator')->effect('fadeOut'),
                        'update'=>'#choose_options',
                        'class' => 'btn btn-large btn-primary')
                    );?> 
                </div>
                <div class="form-group col-sm-12">
                    <hr>          
                </div>
            </fieldset>
            <?php echo $this->Form->end();?>
        </div>
    </div>
    <div id="choose_options" class="col-sm-12"></div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="4TSA5XDTXKUSG">
        <input class="donate" type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
    </form>
</div> 