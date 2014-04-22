<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Autoglass | Veinsa');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

	<head>
		<?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
		<title>
			<?php echo $cakeDescription ?>
			<?php //echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->fetch('meta');
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap');
			//echo $this->Html->css('docs.min');
			echo $this->Html->css('sticky-footer-navbar');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
        
     
	</head>

	<body>
	
	<!-- Main Menu -->
    <?php 
		echo $this->element('menu/top_menu'); 
	?>

	
    <!-- Begin page content -->
    <div class="container">
     
     		
           
           <?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
            
        
     
    </div>


	

    <div id="footer">
      <div class="container">
        <p class="text-muted">Desarrollado por <a href="http://www.ecuuve.com">ecuuve.com</a></p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php 
		echo $this->Html->css('bootstrap.min');
			//echo $this->Html->css('docs.min');
			echo $this->Html->css('sticky-footer-navbar');
			echo $this->fetch('css');
			echo $this->fetch('script');
			echo $this->Html->script('bootstrap.min'); ?>
  </body>


</html>