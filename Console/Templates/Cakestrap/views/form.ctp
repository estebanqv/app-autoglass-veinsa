<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link http://cakephp.org CakePHP(tm) Project
 * @package Cake.Console.Templates.default.views
 * @since CakePHP(tm) v 1.2.0.5234
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<div id="page-container" class="row">

	<!-- /#sidebar .col-sm-3 -->
	<div id="page-content" class="col-sm-3">
    	
        
        
    </div>
	<div id="page-content" class="col-sm-9">
    
    	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h3>
          </div>
          <div class="panel-body">
    
	
		<div class="<?php echo $pluralVar; ?> form">
		
			<?php echo "<?php echo \$this->Form->create('{$modelClass}', array('role' => 'form','class'=>'form-horizontal')); ?>\n"; ?>

				<fieldset>

<?php
	foreach ($fields as $field) {
		if (strpos($action, 'add') !== false && $field == $primaryKey) {
			continue;
		} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
			echo "\t\t\t\t\t<div class=\"form-group\">\n";
			echo "\t\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array('class' => 'form-control','label' => array('text'=>__('{$field}'), 'class'=>\"col-sm-2 control-label\"),'between' => '<div class=\"col-sm-10\">','after' => '</div>','div' => false)); ?>\n";
			echo "\t\t\t\t\t</div><!-- .form-group -->\n";
		}
	}
	
	echo "\n";
	echo "\t\t\t\t\t<?php echo \$this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>\n";
?>

				</fieldset>

<?php echo "\t\t\t<?php echo \$this->Form->end(); ?>\n";?>

		</div><!-- /.form -->
        
        </div>
        </div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->