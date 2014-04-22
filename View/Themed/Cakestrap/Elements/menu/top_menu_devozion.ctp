<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
	<div class="container">
	  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <?php echo $this->Html->link('devozion.com', array('controller' => 'teachings', 'action' => 'index'), array('class'=>'brand','escape' => false)); ?>
	  <div class="nav-collapse collapse">
		<ul class="nav">
			<?php 
				if ($this->Session->read('Auth.User')) { 
			?>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lo mío<b class="caret"></b></a>
                    <ul class="dropdown-menu">
		              <li><?php echo $this->Html->link('Mi Perfil', array('controller' => 'users', 'action' => 'edit',$this->Session->read('Auth.User.id')), array('escape' => false)); ?></li>                        
                      <li><?php echo $this->Html->link('Mis Devozionales', array('controller' => 'users', 'action' => 'view',$this->Session->read('Auth.User.id')), array('escape' => false)); ?></li>            
                      <li><?php echo $this->Html->link('Mis Favoritos', array('controller' => 'users', 'action' => 'favs',$this->Session->read('Auth.User.id')), array('escape' => false)); ?></li>                                  
                      <li class="divider"></li>
                      <li class="nav-header">Opciones</li>
                      <li><?php echo $this->Html->link('Agregar Devozional', array('controller' => 'teachings', 'action' => 'add'), array('escape' => false)); ?></li>
                    </ul>
                </li>
				
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lo de otros<b class="caret"></b></a>
                    <ul class="dropdown-menu">
		              <li><?php echo $this->Html->link('Ver Devozionales', array('controller' => 'teachings', 'action' => 'index'), array('escape' => false)); ?></li>
                      <li class="divider"></li>
                      <li class="nav-header">Opciones</li>
                      <li><?php echo $this->Html->link('Invitar a un amigo', array('controller' => 'users', 'action' => 'invitacion'), array('escape' => false)); ?></li>
                    </ul>
                </li>
                <li><?php echo $this->Html->link('Terminar Sesión', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?></li>
			<?php 
				} else{ ?>
                <li><?php echo $this->Html->link('Iniciar Sesión', array('controller' => 'users', 'action' => 'login'), array('escape' => false)); ?></li>
                <li><?php echo $this->Html->link('Crear Mi Propia Cuenta', array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?></li>               
			<?php	}
			?> 
			
         
            
		</ul>            
	  </div>
	</div>
  </div>
</div>