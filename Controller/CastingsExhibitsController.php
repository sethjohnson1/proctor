<?php
App::uses('AppController', 'Controller');
/**
 * CastingsExhibits Controller
 *
 * @property CastingsExhibit $CastingsExhibit
 * @property PaginatorComponent $Paginator
 */
class CastingsExhibitsController extends AppController {

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
		$this->CastingsExhibit->recursive = 0;
		$this->set('castingsExhibits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CastingsExhibit->exists($id)) {
			throw new NotFoundException(__('Invalid castings exhibit'));
		}
		$options = array('conditions' => array('CastingsExhibit.' . $this->CastingsExhibit->primaryKey => $id));
		$this->set('castingsExhibit', $this->CastingsExhibit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CastingsExhibit->create();
			if ($this->CastingsExhibit->save($this->request->data)) {
				$this->Session->setFlash(__('The castings exhibit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The castings exhibit could not be saved. Please, try again.'));
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
		if (!$this->CastingsExhibit->exists($id)) {
			throw new NotFoundException(__('Invalid castings exhibit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CastingsExhibit->save($this->request->data)) {
				$this->Session->setFlash(__('The castings exhibit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The castings exhibit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CastingsExhibit.' . $this->CastingsExhibit->primaryKey => $id));
			$this->request->data = $this->CastingsExhibit->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CastingsExhibit->id = $id;
		if (!$this->CastingsExhibit->exists()) {
			throw new NotFoundException(__('Invalid castings exhibit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CastingsExhibit->delete()) {
			$this->Session->setFlash(__('The castings exhibit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The castings exhibit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
