
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Articles'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Article'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Chapters'), array('controller' => 'chapters', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Chapter'), array('controller' => 'chapters', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Measure Units'), array('controller' => 'measure_units', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Measure Unit'), array('controller' => 'measure_units', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="articles view">

			<h2><?php  echo __('Article'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Amount'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['amount']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Obs Amount'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['obs_amount']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Value'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['value']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Obs Value'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['obs_value']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Chapter'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($article['Chapter']['name'], array('controller' => 'chapters', 'action' => 'view', $article['Chapter']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Measure Unit'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($article['MeasureUnit']['name'], array('controller' => 'measure_units', 'action' => 'view', $article['MeasureUnit']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($article['Article']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
