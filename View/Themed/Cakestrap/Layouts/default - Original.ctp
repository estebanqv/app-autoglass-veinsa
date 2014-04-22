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

$cakeDescription = __d('cake_dev', 'Emmanuel por ecuuve.com');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('favicon.ico', 'http://www.devozion.com/app/webroot/img/favicon.ico', array('type' => 'icon'));

			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min');
			
			?>
            
            <style type="text/css">
			  body {
				padding-top: 60px;
				padding-bottom: 40px;
			  }
			</style>
            
            <?php
			
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('core');
			
			echo $this->Html->css('custom1/custom-theme/jquery-ui-1.10.0.custom');		
			
			echo $this->fetch('css');
			
			echo $this->Html->script('libs/jquery');
			echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->Html->script('libs/jquery-1.4.2.min');
			echo $this->Html->script('libs/jquery-ui-1.8.4.custom.min');
			echo $this->Html->script('libs/jquery.autocomplete.min');
			echo $this->Html->script('libs/jquery.jeditable.min');		
			
			echo $this->fetch('script');
		?>
        
        <style type=>

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }

    </style>
        
       <script id="bw-highlighter-config" data-version="RVR60" data-ignore="no-scripture"> 
		(function(w, d, s, e, id) {
		  w._bhparse = w._bhparse || [];
		  function l() {
			if (d.getElementById(id)) return;
			var n = d.createElement(s), x = d.getElementsByTagName(s)[0];
			n.id = id; n.async = true; n.src = '//bibles.org/linker/js/client.js';
			x.parentNode.insertBefore(n, x);
		  }
		  (w.attachEvent) ? w.attachEvent('on' + e, l) : w.addEventListener(e, l, false);
		})(window, document, 'script', 'load', 'bw-highlighter-src');
		</script> 
         
       
	</head>

	<body>


<!-- Begin page content -->
  <div id="main-container">
		
			<div id="header" class="container">
				<?php echo $this->element('menu/top_menu'); ?>
			</div><!-- #header .container -->
			
			<div id="content" class="container">
             
				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
                
			</div><!-- #header .container -->
			
      <div id="push"></div>
    </div>



	  <div id="footer">
      <div class="container">
        <p class="muted credit">por <a href="http://ecuuve.com">ecuuve.com</a></p>
      </div>
    </div>

			
		</div><!-- #main-container -->
		
		

  

		
	</body>

</html>