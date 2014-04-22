
<div id="page-container" class="row">

	<!-- /#sidebar .col-sm-3 -->
	<div id="page-content" class="col-sm-3">
    	
        
        
    </div>
	<div id="page-content" class="col-sm-9">
    
    	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Add Task'); ?></h3>
          </div>
          <div class="panel-body">
    
	
		<div class="tasks form">
		
			<?php echo $this->Form->create('Task', array('role' => 'form','class'=>'form-horizontal')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('technical_id', array('class' => 'form-control','label' => array('text'=>__('Técnico'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('user_id', array('class' => 'form-control','label' => array('text'=>__('Creado por'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('chassis_number', array('class' => 'form-control','label' => array('text'=>__('# Chasis'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('task_step_id', array('class' => 'form-control','label' => array('text'=>__('Estado del trabajo'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control','label' => array('text'=>__('Nombre del Proyecto'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('description', array('class' => 'form-control','label' => array('text'=>__('Detalles'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
				<!--	<div class="form-group">
						<?php /* echo $this->Form->input('start_date', array('class' => 'form-control','label' => array('text'=>__('start_date'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
				<!--	<div class="form-group">
						<?php echo $this->Form->input('finish_date', array('type' => 'hidden', 'class' => 'form-control','label' => array('text'=>__('finish_date'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
				<!--	<div class="form-group">
						<?php echo $this->Form->input('hours', array('class' => 'form-control','label' => array('text'=>__('hours'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
				<!--	<div class="form-group">
						<?php echo $this->Form->input('notes', array('class' => 'form-control','label' => array('text'=>__('notes'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); */ ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
        
        </div>
        </div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->