
<div id="page-container" class="row">

	<!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-12">
		
		<div class="users view">

			<h2><?php  echo __('User'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Group'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LastName'); ?></strong></td>
		<td>
			<?php echo h($user['User']['lastName']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Username'); ?></strong></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Password'); ?></strong></td>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Mobile'); ?></strong></td>
		<td>
			<?php echo h($user['User']['mobile']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Office'); ?></strong></td>
		<td>
			<?php echo h($user['User']['office']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Home'); ?></strong></td>
		<td>
			<?php echo h($user['User']['home']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Notes'); ?></strong></td>
		<td>
			<?php echo h($user['User']['notes']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Online'); ?></strong></td>
		<td>
			<?php echo h($user['User']['online']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Quotes'); ?></h3>
				
				<?php if (!empty($user['Quote'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Selection Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($user['Quote'] as $quote): ?>
		<tr>
			<td><?php echo $quote['id']; ?></td>
			<td><?php echo $quote['title']; ?></td>
			<td><?php echo $quote['description']; ?></td>
			<td><?php echo $quote['user_id']; ?></td>
			<td><?php echo $quote['selection_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $quote['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotes', 'action' => 'delete', $quote['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $quote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Quote'), array('controller' => 'quotes', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Selections'); ?></h3>
				
				<?php if (!empty($user['Selection'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($user['Selection'] as $selection): ?>
		<tr>
			<td><?php echo $selection['id']; ?></td>
			<td><?php echo $selection['user_id']; ?></td>
			<td><?php echo $selection['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'selections', 'action' => 'view', $selection['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'selections', 'action' => 'edit', $selection['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'selections', 'action' => 'delete', $selection['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $selection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Selection'), array('controller' => 'selections', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
