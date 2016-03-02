<?php
App::uses('AppController', 'Controller');
/**
 * Exhibits Controller
 *
 * @property Exhibit $Exhibit
 * @property PaginatorComponent $Paginator
 */
class ExhibitsController extends AppController {

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
	public function index() {
		$this->Exhibit->recursive = 0;
		$this->set('exhibits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Exhibit->exists($id)) {
			throw new NotFoundException(__('Invalid exhibit'));
		}
		$options = array('conditions' => array('Exhibit.' . $this->Exhibit->primaryKey => $id));
		$this->set('exhibit', $this->Exhibit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Exhibit->create();
			if ($this->Exhibit->save($this->request->data)) {
				$this->Session->setFlash(__('The exhibit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exhibit could not be saved. Please, try again.'));
			}
		}
		$castings = $this->Exhibit->Casting->find('list');
		$this->set(compact('castings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Exhibit->exists($id)) {
			throw new NotFoundException(__('Invalid exhibit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Exhibit->save($this->request->data)) {
				$this->Session->setFlash(__('The exhibit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exhibit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Exhibit.' . $this->Exhibit->primaryKey => $id));
			$this->request->data = $this->Exhibit->find('first', $options);
		}
		$castings = $this->Exhibit->Casting->find('list');
		$this->set(compact('castings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Exhibit->id = $id;
		if (!$this->Exhibit->exists()) {
			throw new NotFoundException(__('Invalid exhibit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Exhibit->delete()) {
			$this->Session->setFlash(__('The exhibit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The exhibit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
