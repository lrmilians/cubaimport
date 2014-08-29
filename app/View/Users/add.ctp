<div id="page-container" class="row">
    <div id="page-content" class="col-sm-12">
        <h2><?php echo __('Adicionar Usuario'); ?></h2>
        <hr>
        <div class="users form">
            <?php echo $this->Form->create('User', array('role' => 'form')); ?>
                <fieldset>
                    <div class="form-group col-sm-6">
                        <div class="form-group">
                            <?php echo $this->Form->input('username', array('label' => 'Nombre de usuario *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('name', array('label' => 'Nombre completo *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('password', array('label' => 'Contraseña *', 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('password_confirm', array('label' => 'Confirmar Contraseña *', 'maxLength' => 255, 'title' => 'Confirm password', 'type' => 'password', 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="form-group">
                            <?php  echo $this->Form->input('role_id', array('label' => 'Rol *', 'class' => 'form-control'));?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('active', array('label' => 'Activo *', 'checked' => true)); ?>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="form-group col-sm-3 col-sm-offset-4">
                            <?php echo $this->Form->submit('Aceptar', array('class' => 'btn btn-large btn-primary')); ?>
                        </div>   
                        <div class="form-group col-sm-3" >
                            <?php echo $this->Html->link('Cancelar','/users', array('class' => 'btn btn-large btn-danger')); ?>
                        </div>     
                    </div>
                </fieldset>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>