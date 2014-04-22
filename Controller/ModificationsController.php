<?php
App::uses('AppController', 'Controller');
/**
 * Modifications Controller
 *
 * @property Modification $Modification
 * @property PaginatorComponent $Paginator
 */
class ModificationsController extends AppController {

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
		$this->Modification->recursive = 0;
		$this->set('modifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Modification->exists($id)) {
			throw new NotFoundException(__('Invalid modification'));
		}
		$options = array('conditions' => array('Modification.' . $this->Modification->primaryKey => $id));
		$this->set('modification', $this->Modification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modification->create();
			if ($this->Modification->save($this->request->data)) {
				$this->Session->setFlash(__('The modification has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modification could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$users = $this->Modification->User->find('list');
		$tasks = $this->Modification->Task->find('list');
		$this->set(compact('users', 'tasks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Modification->id = $id;
		if (!$this->Modification->exists($id)) {
			throw new NotFoundException(__('Invalid modification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modification->save($this->request->data)) {
				$this->Session->setFlash(__('The modification has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modification could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Modification.' . $this->Modification->primaryKey => $id));
			$this->request->data = $this->Modification->find('first', $options);
		}
		$users = $this->Modification->User->find('list');
		$tasks = $this->Modification->Task->find('list');
		$this->set(compact('users', 'tasks'));
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
		$this->Modification->id = $id;
		if (!$this->Modification->exists()) {
			throw new NotFoundException(__('Invalid modification'));
		}
		if ($this->Modification->delete()) {
			$this->Session->setFlash(__('Modification deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modification was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
