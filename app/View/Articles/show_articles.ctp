<div id="page-container" class="row">
	<div id="page-content" class="col-sm-12">
		<div class="articles index">
                        <div class="col-sm-12">
                            <h2 class="col-sm-10"><?php echo __('Artículos'); ?></h2>
                            <h5 class="col-sm-2"><?php echo $this->Html->link(__('Nuevo Artículo'), array('action' => 'add'), array('class' => 'btn btn-large btn-primary'));?></h5>
                            <hr>
                        </div>
                        
			<div class="table-responsive col-sm-12">
                            <ul class="pagination">
                                <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                                      echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                                      echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));?>
                            </ul>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->Paginator->sort('No.'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Artículo'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Descripción'); ?></th>
                                            <th><?php echo $this->Paginator->sort('String Búsqueda'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Cantidad'); ?></th>
                                            <th><?php echo $this->Paginator->sort('U/M'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Observaciones'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Valor'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Observaciones'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Capítulo'); ?></th>         
                                            <th class="actions"><?php echo __('Acciones'); ?></th>
                                        </tr>
                                    </thead>
					<tbody>
                                            <?php $i = 1; 
                                                $controller = '';    
                                                if ($this->Paginator->counter(array('format' => ('{:page}'))) == '1') $controller = 'articles/';
                                                foreach ($articles as $article): ?>
                                                <tr>
                                                    <td><?php echo $i++; ?>&nbsp;</td>
                                                    <td><?php  
                                                        echo $this->inPlaceEditing->input('Article', 'name', $article['Article']['id'],
                                                                array('value' => $article['Article']['name'],
                                                                      'actionName' => $controller.'in_place_editing',
                                                                      'type' => 'text',
                                                                      'cancelText' => 'Cancelar',
                                                                      'submitText' => 'Salvar',
                                                                      'toolTip' => 'Click para editar el Nombre',
                                                                      'containerType' => 'dd'
                                                                      )
                                                                );
                                                    ?>&nbsp;</td>   
                                                    <td><?php 
                                                        echo $this->inPlaceEditing->input('Article', 'description', $article['Article']['id'],
                                                                array('value' => $article['Article']['description'],
                                                                      'actionName' => $controller.'in_place_editing',
                                                                      'type' => 'text',
                                                                      'cancelText' => 'Cancelar',
                                                                      'submitText' => 'Salvar',
                                                                      'toolTip' => 'Click para editar la Descripción',
                                                                      'containerType' => 'dd'
                                                                      )
                                                                );
                                                    ?>&nbsp;</td> 
                                                    <td><?php 
                                                        echo $this->inPlaceEditing->input('Article', 'string_search', $article['Article']['id'],
                                                                array('value' => $article['Article']['string_search'],
                                                                      'actionName' => $controller.'in_place_editing',
                                                                      'type' => 'text',
                                                                      'cancelText' => 'Cancelar',
                                                                      'submitText' => 'Salvar',
                                                                      'toolTip' => 'Click para editar String Búsqueda',
                                                                      'containerType' => 'dd'
                                                                      )
                                                                );
                                                    ?>&nbsp;</td> 
                                                    <td><?php 
                                                        echo $this->inPlaceEditing->input('Article', 'amount', $article['Article']['id'],
                                                                array('value' => $article['Article']['amount'],
                                                                      'actionName' => $controller.'in_place_editing',
                                                                      'type' => 'text',
                                                                      'cancelText' => 'Cancelar',
                                                                      'submitText' => 'Salvar',
                                                                      'toolTip' => 'Click para editar la Cantidad',
                                                                      'containerType' => 'dd'
                                                                      )
                                                                );
                                                    ?>&nbsp;</td>
                                                    <td><?php echo $article['MeasureUnit']['name']; ?></td>
                                                    <td><?php echo h($article['Article']['obs_amount']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['value']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['obs_value']); ?>&nbsp;</td>
                                                    <td>
                                                        <?php echo $this->Html->link($article['Chapter']['name'], array('controller' => 'chapters', 'action' => 'view', $article['Chapter']['id'])); ?>
                                                    </td>
                                                    
                                                    <td class="actions">
                                                        <ul class="navigation">
                                                            <li><a href="#"><?php echo $this->Html->image('tools.png')?></a>
                                                                <ul class="level1">
                                                                    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $article['Article']['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                                    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $article['Article']['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                                    <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $article['Article']['id']), array('class' => 'btn btn-default btn-xs'), __('Está seguro que desea eliminar el artículo '.$article['Article']['name'].' ?', $article['Article']['id'])); ?></li>         
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