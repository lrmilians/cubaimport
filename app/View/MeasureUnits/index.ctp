<div id="page-container" class="row">	
    <div id="page-content" class="col-sm-12">
        <div class="measureUnits index">
            <h2><?php echo __('Unidades de medida'); ?></h2>
            <hr>
            <div class="col-sm-12">
                <h5 class="col-sm-2"><?php echo $this->Html->link(__('Nueva Unidad de Medida'), array('action' => 'add'), array('class' => 'btn btn-large btn-primary'));?></h5>
            </div>
            <div class="table-responsive col-sm-12">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('Unidad Medida'); ?></th>
                            <th><?php echo $this->Paginator->sort('Creado'); ?></th>
                            <th><?php echo $this->Paginator->sort('Modificado'); ?></th>
                            <th class="actions"><?php echo __('Acciones'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($measureUnits as $measureUnit): ?>
                                <tr>
                                    <td><?php echo h($measureUnit['MeasureUnit']['name']); ?>&nbsp;</td>
                                    <td><?php echo h($measureUnit['MeasureUnit']['created']); ?>&nbsp;</td>
                                    <td><?php echo h($measureUnit['MeasureUnit']['modified']); ?>&nbsp;</td>
                                    <td class="actions">
                                        <ul class="navigation">
                                            <li><a href="#"><?php echo $this->Html->image('tools.png')?></a>
                                                <ul class="level1">
                                                    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $measureUnit['MeasureUnit']['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $measureUnit['MeasureUnit']['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                    <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $measureUnit['MeasureUnit']['id']), array('class' => 'btn btn-default btn-xs'), __('Está seguro que desea eliminar la U/M '.$measureUnit['MeasureUnit']['name'].' ?', $measureUnit['MeasureUnit']['id'])); ?></li>         
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p><small>
                <?php echo $this->Paginator->counter(array(
                            'format' => __('Pagina {:page} de {:pages} | {:current} registros de {:count} | a partir del registro {:start}, y terminando en {:end}'))); ?>
            </small></p>
            <ul class="pagination">
                <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                      echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                      echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));?>
            </ul>	
        </div>
    </div>
</div>