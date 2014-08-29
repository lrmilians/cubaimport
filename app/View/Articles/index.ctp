<div id="page-container" class="row">
	<div id="page-content" class="col-sm-12">
		<div class="articles index">
			<h2><?php echo __('Artículos'); ?></h2>
			<hr>
                        <div class="col-sm-12">
                            <h5 class="col-sm-2"><?php echo $this->Html->link(__('Nuevo Artículo'), array('action' => 'add'), array('class' => 'btn btn-large btn-primary'));?></h5>
                        </div>
			<div class="table-responsive col-sm-12">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->Paginator->sort('No.'); ?></th>
                                            <th><?php echo $this->Paginator->sort('Artículo'); ?></th>
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
                                                foreach ($articles as $article): ?>
                                                <tr>
                                                    <td><?php echo $i++; ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['name']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['amount']); ?>&nbsp;</td>
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