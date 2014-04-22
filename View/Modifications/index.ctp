
<div id="page-container" class="row">

	<!-- /#sidebar .col-sm-3 -->

	<div id="page-content" class="col-sm-12">

		<div class="modifications index">
        
        	<h2><?php echo __('Modifications'); ?> <?php echo $this->Html->link(__('New'), array('action' => 'add'), array('class' => 'btn btn-success')); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th><?php echo $this->Paginator->sort('task_id'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							
						</tr>
					</thead>
					<tbody>
<?php foreach ($modifications as $modification): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('action' => 'view', $modification['Modification']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			<?php echo $this->Html->link($this->Html->tag('span',''),array('action' => 'edit', $modification['Modification']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			<?php echo $this->Form->postLink($this->Html->tag('span',''), array('action' => 'delete', $modification['Modification']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $modification['Modification']['id'])); ?>
		</td>		<td><?php echo h($modification['Modification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($modification['User']['name'], array('controller' => 'users', 'action' => 'view', $modification['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($modification['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $modification['Task']['id'])); ?>
		</td>
		<td><?php echo h($modification['Modification']['description']); ?>&nbsp;</td>
		<td><?php echo h($modification['Modification']['created']); ?>&nbsp;</td>
		<td><?php echo h($modification['Modification']['modified']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->