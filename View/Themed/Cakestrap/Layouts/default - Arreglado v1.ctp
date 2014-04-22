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

$cakeDescription = __d('cake_dev', 'ecuuve.com');

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
			echo $this->Html->css('docs.min');
			echo $this->Html->css('sticky-footer-navbar');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
        
     
	</head>

	 <body>


	

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">emmanuel</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#about">Clientes<span class="badge pull-right"> 42</span></a></li>
            <li><a href="#contact">Catálogo<span class="badge pull-right"> 42</span></a></li>
            <li><a href="#contact">Facturas<span class="badge pull-right"> 42</span></a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuración <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Usuarios</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Editar</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Sub...</li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>            
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
        
        <div class="btn-group">
                      <button type="button" class="btn btn-success dropdown-toggle navbar-btn" data-toggle="dropdown">
                       &nbsp; Agregar Nuevo <span class="caret"></span>&nbsp;
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Cliente</a></li>
                        <li><a href="#">Cotización</a></li>
                        <li><a href="#">Factura</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Usuario</a></li>
                      </ul>
                    </div>
        
      </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
     
     		
           
           <div class="row">
            <div class="col-md-3">
                
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Movimientos</div>
                     
                  
                  <div class="list-group">
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Cotización</h4>
                    <p class="list-group-item-text">$100.00 SCOTIABANK</p>
                    <p class="list-group-item-text"><em>16 Febrero 2014</em></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Factura</h4>
                    <p class="list-group-item-text">$100.00 SCOTIABANK</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Factura</h4>
                    <p class="list-group-item-text">$100.00 SCOTIABANK</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Cotización</h4>
                    <p class="list-group-item-text">$100.00 SCOTIABANK</p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Cotización</h4>
                    <p class="list-group-item-text">$100.00 SCOTIABANK</p>
                  </a>
                  
                                  </div>         
                  
                </div>
            </div>
            
            
            
            <div class="col-md-9">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Resumen en números</h3>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills">
                    <li><button type="button" class="btn btn-link btn-lg"><h1>15</h1> Productos</button></li>
                    <li><button type="button" class="btn btn-link btn-lg"><h1>12</h1> Servicios</button></li>
                    <li><button type="button" class="btn btn-link btn-lg"><h1>100</h1> Cotizaciones</button></li>                
                    <li><button type="button" class="btn btn-link btn-lg"><h1>$100.00</h1>CXC</button></li>
                    <li><button type="button" class="btn btn-link btn-lg"><h1>$100.00</h1>CXP</button></li>
                </ul>
              </div>
              
              </div>
              
            </div>
          
                <div class="col-md-3">
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Cotizaciones</div>
                      <div class="panel-body">
                      <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Cliente</th>
                            <th>Monto</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ecuuve</td>
                            <td><span class="badge">$300.00</span></td>
                          
                           
                          </tr>
                          <tr>
                            <td>STE</td>
                            <td><span class="badge">$200.00</span></td>
                            
                          </tr>
                          <tr>
                            <td>MCI</td>
                            <td><span class="badge">$100.00</span></td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                    
                     </div>
                    </div>
                    
                    
                    
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Facturas</div>
                      <div class="panel-body">
                       <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Cliente</th>
                            <th>Monto</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ecuuve</td>
                            <td><span class="badge">$300.00</span></td>
                          
                           
                          </tr>
                          <tr>
                            <td>STE</td>
                            <td><span class="badge">$200.00</span></td>
                            
                          </tr>
                          <tr>
                            <td>MCI</td>
                            <td><span class="badge">$100.00</span></td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                      </div>
                    
                     
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Servicios o Productos Vendidos</div>
                      <div class="panel-body">
                       <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Cliente</th>
                            <th>Monto</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ecuuve</td>
                            <td><span class="badge">$300.00</span></td>
                          
                           
                          </tr>
                          <tr>
                            <td>STE</td>
                            <td><span class="badge">$200.00</span></td>
                            
                          </tr>
                          <tr>
                            <td>MCI</td>
                            <td><span class="badge">$100.00</span></td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                      </div>
                    
                    
                    </div>
                </div>
    		<div class="col-md-6">
           <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="cliente" class="col-sm-2 control-label">Cliente</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cliente" placeholder="Cliente">
                </div>
              </div>
              <div class="form-group">
                <label for="contacto" class="col-sm-2 control-label">Contacto</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contacto" placeholder="Contacto">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="email2" class="col-sm-2 control-label">Email 2</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email2" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="telefono" class="col-sm-2 control-label">Teléfono Contacto</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="telefono" placeholder="Teléfono Contacto">
                </div>
              </div>
              <div class="form-group">
                <label for="telofi" class="col-sm-2 control-label">Teléfono Oficina</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="telofi" placeholder="Teléfono Oficina">
                </div>
              </div>
              <div class="form-group">
                <label for="fax" class="col-sm-2 control-label">Fax</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Fax" placeholder="Fax">
                </div>
              </div>
              <div class="form-group">
                <label for="razon" class="col-sm-2 control-label">Razón Social</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="razon" placeholder="Razón Social">
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-10">
                 <textarea class="form-control" rows="3"></textarea>
    
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Activo
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Agregar</button>
                </div>
              </div>
        </form>
            </div>
            </div>
            
        
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
      <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>


	

    <div id="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
  </body>


</html>