<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
		<?php echo $this->Html->link('DASHBOARD', array('controller' => 'dashboard', 'action' => 'index'), array('class'=>'navbar-brand','escape' => false)); ?>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><?php echo $this->Html->link('Groups', array('controller' => 'groups', 'action' => 'index'), array('escape' => false)); ?></li>                        
                <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?></li>                        

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuración <b class="caret"></b></a>
                <ul class="dropdown-menu">
                
                	<li><?php echo $this->Html->link('Opcion 1', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link('Opcion 2', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link('Opcion 3', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link('Editar', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Sub...</li>
                    <li><?php echo $this->Html->link('Terminar', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                    </ul>
                </li>            
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle navbar-btn" data-toggle="dropdown">
                    &nbsp; Agregar Nuevo <span class="caret"></span>&nbsp;
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Opcion 1', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('Opcion 2', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('Opcion 3', array('controller' => '', 'action' => ''), array('escape' => false)); ?></li>
                    </ul>
                </div>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>