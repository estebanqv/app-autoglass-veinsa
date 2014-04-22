
<div id="page-container" class="row">

	<!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-12">
		
		<div class="tasks view">

			<h2><?php  echo __('Detalles del trabajo'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Técnico'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Agente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Numero Chasis'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['chassis_number']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Etapa'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Trabajo'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descripción'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['description']); ?>
			&nbsp;
		</td>
</tr> <!-- <tr>		<td><strong><?php /* echo __('Start Date'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['start_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Finish Date'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['finish_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hours'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['hours']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Notes'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['notes']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($task['Task']['modified']); */ ?>
			&nbsp;
		</td>
</tr>		-->			</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Modifiaciones del trabajo'); ?></h3>
				
				<?php if (!empty($task['Modification'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Task Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($task['Modification'] as $modification): ?>
		<tr>
			<td><?php echo $modification['id']; ?></td>
			<td><?php echo $modification['user_id']; ?></td>
			<td><?php echo $modification['task_id']; ?></td>
			<td><?php echo $modification['description']; ?></td>
			<td><?php echo $modification['created']; ?></td>
			<td><?php echo $modification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'modifications', 'action' => 'view', $modification['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'modifications', 'action' => 'edit', $modification['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'modifications', 'action' => 'delete', $modification['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $modification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Hacer modificación'), array('controller' => 'modifications', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
