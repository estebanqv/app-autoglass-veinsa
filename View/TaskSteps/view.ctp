
<div id="page-container" class="row">

	<!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-12">
		
		<div class="taskSteps view">

			<h2><?php  echo __('Task Step'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($taskStep['TaskStep']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($taskStep['TaskStep']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($taskStep['TaskStep']['description']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Tasks'); ?></h3>
				
				<?php if (!empty($taskStep['Task'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Technical Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Chassis Number'); ?></th>
		<th><?php echo __('Task Step Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Finish Date'); ?></th>
		<th><?php echo __('Hours'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($taskStep['Task'] as $task): ?>
		<tr>
			<td><?php echo $task['id']; ?></td>
			<td><?php echo $task['technical_id']; ?></td>
			<td><?php echo $task['user_id']; ?></td>
			<td><?php echo $task['chassis_number']; ?></td>
			<td><?php echo $task['task_step_id']; ?></td>
			<td><?php echo $task['name']; ?></td>
			<td><?php echo $task['description']; ?></td>
			<td><?php echo $task['start_date']; ?></td>
			<td><?php echo $task['finish_date']; ?></td>
			<td><?php echo $task['hours']; ?></td>
			<td><?php echo $task['notes']; ?></td>
			<td><?php echo $task['created']; ?></td>
			<td><?php echo $task['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tasks', 'action' => 'view', $task['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tasks', 'action' => 'edit', $task['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tasks', 'action' => 'delete', $task['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $task['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Task'), array('controller' => 'tasks', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
