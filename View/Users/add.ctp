
<div id="page-container" class="row">

	<!-- /#sidebar .col-sm-3 -->
	<div id="page-content" class="col-sm-3">
    	
        
        
    </div>
	<div id="page-content" class="col-sm-9">
    
    	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo __('Add User'); ?></h3>
          </div>
          <div class="panel-body">
    
	
		<div class="users form">
		
			<?php echo $this->Form->create('User', array('role' => 'form','class'=>'form-horizontal')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('group_id', array('class' => 'form-control','label' => array('text'=>__('group_id'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control','label' => array('text'=>__('name'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('lastName', array('class' => 'form-control','label' => array('text'=>__('lastName'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('username', array('class' => 'form-control','label' => array('text'=>__('username'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control','label' => array('text'=>__('password'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('mobile', array('class' => 'form-control','label' => array('text'=>__('mobile'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('office', array('class' => 'form-control','label' => array('text'=>__('office'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('home', array('class' => 'form-control','label' => array('text'=>__('home'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('email', array('class' => 'form-control','label' => array('text'=>__('email'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('notes', array('class' => 'form-control','label' => array('text'=>__('notes'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('online', array('class' => 'form-control','label' => array('text'=>__('online'), 'class'=>"col-sm-2 control-label"),'between' => '<div class="col-sm-10">','after' => '</div>','div' => false)); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
        
        </div>
        </div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->