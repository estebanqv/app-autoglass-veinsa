<?php
App::uses('AppController', 'Controller');
/**
 * TaskSteps Controller
 *
 * @property TaskStep $TaskStep
 * @property PaginatorComponent $Paginator
 */
class TaskStepsController extends AppController {

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
		$this->TaskStep->recursive = 0;
		$this->set('taskSteps', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaskStep->exists($id)) {
			throw new NotFoundException(__('Invalid task step'));
		}
		$options = array('conditions' => array('TaskStep.' . $this->TaskStep->primaryKey => $id));
		$this->set('taskStep', $this->TaskStep->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaskStep->create();
			if ($this->TaskStep->save($this->request->data)) {
				$this->Session->setFlash(__('The task step has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task step could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->TaskStep->id = $id;
		if (!$this->TaskStep->exists($id)) {
			throw new NotFoundException(__('Invalid task step'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TaskStep->save($this->request->data)) {
				$this->Session->setFlash(__('The task step has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task step could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('TaskStep.' . $this->TaskStep->primaryKey => $id));
			$this->request->data = $this->TaskStep->find('first', $options);
		}
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
		$this->TaskStep->id = $id;
		if (!$this->TaskStep->exists()) {
			throw new NotFoundException(__('Invalid task step'));
		}
		if ($this->TaskStep->delete()) {
			$this->Session->setFlash(__('Task step deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Task step was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
