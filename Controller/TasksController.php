<?php
App::uses('AppController', 'Controller');
/**
 * Tasks Controller
 *
 * @property Task $Task
 * @property PaginatorComponent $Paginator
 */
class TasksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
 public function beforeFilter() {
	    parent::beforeFilter();
		$this->Auth->allow();
		//$this->Auth->allow('index', 'view');
	}
	public function index() {
		$this->Task->recursive = 0;
		$this->set('tasks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
		$this->set('task', $this->Task->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Task->create();
			if ($this->Task->save($this->request->data)) {
				$this->Session->setFlash(__('The task has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$technicals = $this->Task->Technical->find('list');
		$users = $this->Task->User->find('list');
		$taskSteps = $this->Task->TaskStep->find('list');
		$this->set(compact('technicals', 'users', 'taskSteps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Task->id = $id;
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Task->save($this->request->data)) {
				$this->Session->setFlash(__('The task has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
			$this->request->data = $this->Task->find('first', $options);
		}
		$technicals = $this->Task->Technical->find('list');
		$users = $this->Task->User->find('list');
		$taskSteps = $this->Task->TaskStep->find('list');
		$this->set(compact('technicals', 'users', 'taskSteps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Task->id = $id;
		if (!$this->Task->exists()) {
			throw new NotFoundException(__('Invalid task'));
		}
		if ($this->Task->delete()) {
			$this->Session->setFlash(__('Task deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Task was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	
/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function renovar($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 10);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea ha sido renovada'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no Renovada'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	public function iniciar($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 11);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea en Proceso'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no Iniciada'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	public function terminar($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 12);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea Terminada'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no se pudo terminar'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	public function rechazar($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 13);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea Rechazada'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no se pudo rechazar'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}	

	public function cancelar($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 14);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea Cancelada'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no cancelada'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	public function pausar($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 15);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea Pausada'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no se pudo pausar'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
		
	public function devolver($id) {
		$this->Task->id = $id;
		$modificado = $this->Task->saveField('task_step_id', 16);
		if(!empty($modificado)){
			$this->Session->setFlash(__('Tarea Devuelta'), 'flash/success');
			$this->redirect(array('controller'=>'dashboard','view' => 'index'));
		}
		//$this->Task->save();
		$this->Session->setFlash(__('Tarea no se pudo devolver'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}	
}
