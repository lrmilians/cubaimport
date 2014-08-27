<div id="page-container" class="row">
    <div id="page-content" class="col-sm-12">
        <div class="functionalities index">
            <h2><?php echo __('Funcionalidades'); ?></h2>
            <hr>
            <h5><?php echo $this->Html->link(__('Nueva Funcionalidad'), array('action' => 'add'), array('class' => 'btn btn-large btn-primary'));?></h5>
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('name', 'Funcionalidad'); ?></th>
                            <th><?php echo $this->Paginator->sort('active', 'Activa'); ?></th>
                            <th><?php echo $this->Paginator->sort('url', 'URL'); ?></th>
                            <th><?php echo $this->Paginator->sort('description', 'Descripción'); ?></th>
                            <th><?php echo $this->Paginator->sort('functionality_type_id', 'Tipo Funcionalidad'); ?></th>
                            <th><?php echo $this->Paginator->sort('created', 'Creada'); ?></th>
                            <th><?php echo $this->Paginator->sort('modified', 'Modificada'); ?></th>		
                            <th class="actions"><?php echo __('Acciones'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($functionalities as $functionality): ?>
                            <tr>
                                <td><?php echo h($functionality['Functionality']['name']); ?>&nbsp;</td>
                                <td><?php echo h($functionality['Functionality']['active']); ?>&nbsp;</td>
                                <td><?php echo h($functionality['Functionality']['url']); ?>&nbsp;</td>
                                <td><?php echo h($functionality['Functionality']['description']); ?>&nbsp;</td>
                                <td><?php echo $this->Html->link($functionality['FunctionalityType']['name'], array('controller' => 'functionality_types', 'action' => 'view', $functionality['FunctionalityType']['id'])); ?></td>
                                <td><?php echo h($functionality['Functionality']['created']); ?>&nbsp;</td>
                                <td><?php echo h($functionality['Functionality']['modified']); ?>&nbsp;</td>
                                <td class="actions">
                                    <ul class="navigation">
                                        <li><a href="#"><?php echo $this->Html->image('tools.png')?></a>
                                            <ul class="level1">
                                                <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $functionality['Functionality']['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $functionality['Functionality']['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $functionality['Functionality']['id']), array('class' => 'btn btn-default btn-xs'), __('Está seguro que desea eliminar la funcionalidad '.$functionality['Functionality']['name'].'?', $functionality['Functionality']['id'])); ?></li>
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
                <?php  echo $this->Paginator->counter(array(
                            'format' => __('Pagina {:page} de {:pages} | {:current} registros de {:count} | a partir del registro {:start}, y terminando en {:end}'))); ?>
            </small></p>
            <ul class="pagination">
                <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                      echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                      echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a')); ?>
            </ul>
        </div>
    </div>
</div>