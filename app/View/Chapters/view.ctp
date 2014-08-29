<div id="page-container" class="row">
	<div id="page-content" class="col-sm-12">
            <div class="chapters view">
                <h2><?php  echo __('Datos del Capítulo'); ?></h2>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td><strong><?php echo __('Number'); ?></strong></td>
                                <td><?php echo h($chapter['Chapter']['number']); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Name'); ?></strong></td>
                                <td><?php echo h($chapter['Chapter']['name']); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Created'); ?></strong></td>
                                <td><?php echo h($chapter['Chapter']['created']); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Modified'); ?></strong></td>
                                <td><?php echo h($chapter['Chapter']['modified']); ?>&nbsp;</td>
                            </tr>					
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group">
                    <?php echo $this->Html->link('Regresar','/chapters', array('class' => 'btn btn-large btn-primary')); ?>
                </div>
            </div>					
            <div class="related">
                <h3><?php echo __('Artículos'); ?></h3>
                <hr>
                <?php if (!empty($chapter['Article'])): ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><?php echo __('No'); ?></th>
                                    <th><?php echo __('Nombre'); ?></th>
                                    <th><?php echo __('Cantidad'); ?></th>
                                    <th><?php echo __('Observaciones Cantidad'); ?></th>
                                    <th><?php echo __('Valor'); ?></th>
                                    <th><?php echo __('Observaciones Valor'); ?></th>
                                    <th><?php echo __('Capitulo'); ?></th>
                                    <th><?php echo __('U/M'); ?></th>
                                    <th><?php echo __('Creado'); ?></th>
                                    <th><?php echo __('Modificado'); ?></th>
                                    <th class="actions"><?php echo __('Acciones'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
				foreach ($chapter['Article'] as $article): ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $article['name']; ?></td>
                                        <td><?php echo $article['amount']; ?></td>
                                        <td><?php echo $article['obs_amount']; ?></td>
                                        <td><?php echo $article['value']; ?></td>
                                        <td><?php echo $article['obs_value']; ?></td>
                                        <td><?php echo $chapter['Chapter']['name']?></td>
                                        <td><?php echo $this->Session->read('MeasureUnits')[$article['measure_unit_id']]; ?></td>
                                        <td><?php echo $article['created']; ?></td>
                                        <td><?php echo $article['modified']; ?></td>
                                        <td class="actions">
                                            <ul class="navigation">
                                                <li><a href="#"><?php echo $this->Html->image('tools.png')?></a>
                                                    <ul class="level1">
                                                        <li><?php echo $this->Html->link(__('Ver'), array('controller' => 'articles', 'action' => 'view', $article['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                        <li><?php echo $this->Html->link(__('Editar'), array('controller' => 'articles', 'action' => 'edit', $article['id']), array('class' => 'btn btn-default btn-xs')); ?></li>
                                                        <li><?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'articles', 'action' => 'delete', $article['id']), array('class' => 'btn btn-default btn-xs'), __('Está seguro que desea eliminar el artículo '.$article['name'].' ?', $article['id'])); ?></li>         
                                                    </ul>
                                                </li>
                                            </ul> 
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>	
                <?php endif; ?>		
                <div class="actions">
                    <?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Nuevo Artículo'), array('controller' => 'articles', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				
                </div>		
            </div>
	</div>
</div>
