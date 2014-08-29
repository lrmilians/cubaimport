<div id="choose_options">
    <div id="page-content" class="col-sm-12">
		<div class="articles index">
			<hr>
                        <div class="table-responsive col-sm-12">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Artículo</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>U/M</th>
                                            <th>Observaciones</th>
                                            <th>Valor</th>
                                            <th>Observaciones</th>
                                            <th>Capítulo</th>         
                                        </tr>
                                    </thead>
					<tbody>
                                            <?php $i = 1; 
                                                foreach ($entries as $article): ?>
                                                <tr>
                                                    <td><?php echo $i++; ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['name']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['description']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['amount']); ?>&nbsp;</td>
                                                    <td><?php echo $article['MeasureUnit']['name']; ?></td>
                                                    <td><?php echo h($article['Article']['obs_amount']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['value']); ?>&nbsp;</td>
                                                    <td><?php echo h($article['Article']['obs_value']); ?>&nbsp;</td>
                                                    <td><?php echo $article['Chapter']['name'];?>&nbsp;</td>
                                                </tr>
                                            <?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
