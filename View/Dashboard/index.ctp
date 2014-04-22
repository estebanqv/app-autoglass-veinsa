
<div id="page-container" class="row">

	<div id="page-content" class="col-sm-12">

	
	  <?php //debug($tasks); ?>
	
    
    	<div class="tasks index">
        
        	<h2><?php echo __('Nuevas'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px" colspan="2"><?php echo __('Actions'); ?>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskNuevas as $task): 

?>
	<tr>
		<td class="actions">
        	<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>							
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			
			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
            
            
		</td>		
        <td>
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'devolver', $task['Task']['id']),array('escape'=>false, 'title'=>'Devolver','class'=>'glyphicon glyphicon-backward btn btn-default')); ?>
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'iniciar', $task['Task']['id']),array('rel'=>'tooltip','data-toggle'=>'tooltip', 'title'=>'Iniciar','escape'=>false,'class'=>'glyphicon glyphicon-play btn btn-default')); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
            
            <h2><?php echo __('En Proceso'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo __('Iniciar'); ?></th>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskProceso as $task): 

?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
		</td>		
                <td>
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'pausar', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-pause btn btn-default')); ?>
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'cancelar', $task['Task']['id']),array('rel'=>'tooltip','data-toggle'=>'tooltip', 'title'=>'Iniciar','escape'=>false,'class'=>'glyphicon glyphicon-remove btn btn-default')); ?>
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'terminar', $task['Task']['id']),array('rel'=>'tooltip','data-toggle'=>'tooltip', 'title'=>'Iniciar','escape'=>false,'class'=>'glyphicon glyphicon-ok btn btn-default')); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
            <h2><?php echo __('En Pausa'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo __('Iniciar'); ?></th>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskPausa as $task): 

?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
		</td>		<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
            <h2><?php echo __('Terminadas'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo __('Iniciar'); ?></th>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskTerminadas as $task): 

?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
		</td>		<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
            
            <h2><?php echo __('Canceladas'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo __('Iniciar'); ?></th>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskCanceladas as $task): 

?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
		</td>		<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
            
            <h2><?php echo __('Rechazadas'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo __('Iniciar'); ?></th>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskRechazadas as $task): 

?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			
			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
		</td>		<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
            
            <h2><?php echo __('Devueltas'); ?> </h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                        <th class="actions" width="150px"><?php echo __('Actions'); ?></th>
							<th><?php echo __('Iniciar'); ?></th>
							<th><?php echo __('Tecnico'); ?></th>
							<th><?php echo __('Agente'); ?></th>
							<th><?php echo __('Numero de Chasis'); ?></th>
							<th><?php echo __('Etapa'); ?></th>
							<th><?php echo __('Trabajo'); ?></th>
							<th><?php echo __('Descripcion'); ?></th>
							<th><?php echo __('Iniciado'); ?></th>
							<th><?php echo __('Terminado'); ?></th>
							<th><?php echo __('Notas'); ?></th>
							
							
						</tr>
					</thead>
					<tbody>
<?php 
	$taskCounter = 0;
	//'taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas'
	foreach ($taskDevueltas as $task): 

?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'view', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-search btn btn-default')); ?>			
			<?php echo $this->Html->link($this->Html->tag('span',''),array('controller' => 'tasks','action' => 'edit', $task['Task']['id']),array('escape'=>false,'class'=>'glyphicon glyphicon-edit btn btn-default')); ?>			
			<?php echo $this->Form->postLink($this->Html->tag('span',''),array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']), array('escape'=>false,'class' => 'glyphicon glyphicon-remove btn btn-default'), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
		</td>		<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Technical']['name'], array('controller' => 'users', 'action' => 'view', $task['Technical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($task['User']['name'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['chassis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['TaskStep']['name'], array('controller' => 'task_steps', 'action' => 'view', $task['TaskStep']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['description']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		
	</tr>
<?php 
	$taskCounter++;
	endforeach; 
?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
            
		</div>  
	
	</div>

</div>
