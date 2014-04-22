<?php
    class DashboardController extends AppController {

          var $name = 'Dashboard';
          var $uses = array('Task');

          function index () {
        		$this->set('taskNuevas', $this->Task->findAllBytask_step_id(10));     
				$this->set('taskProceso', $this->Task->findAllBytask_step_id(11));   
				$this->set('taskTerminadas', $this->Task->findAllBytask_step_id(12));     
				$this->set('taskRechazadas', $this->Task->findAllBytask_step_id(13));     
				$this->set('taskCanceladas', $this->Task->findAllBytask_step_id(14));  
				$this->set('taskPausa', $this->Task->findAllBytask_step_id(15));  
				$this->set('taskDevueltas', $this->Task->findAllBytask_step_id(16));          
				$this->set(compact('taskNuevas','taskProceso','taskPausa','taskTerminadas','taskCanceladas','taskRechazadas','taskDevueltas'));
		  }
    }
?>