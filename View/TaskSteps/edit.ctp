
<div id="page-container" class="row">

	<!-- /#sidebar .col-sm-3 -->
	<div id="page-content" class="col-sm-3">
    	
        
        
    </div>
	<div id="page-content" class="col-sm-9">
    
    	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Edit Task Step'); ?></h3>
          </div>
          <div class="panel-body">
    
	
		<div class="taskSteps form">
		
			<?php echo $this->Form->create('TaskStep', array('role' => 'form','class'=>'form-horizontal')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control','label' => array('text'=>__('id'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control','label' => array('text'=>__('name'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('description', array('class' => 'form-control','label' => array('text'=>__('description'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
        
        </div>
        </div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->