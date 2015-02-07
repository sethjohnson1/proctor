<?php
App::uses('AppController', 'Controller');
/**
 * Relatedimages Controller
 *
 * @property Relatedimage $Relatedimage
 * @property PaginatorComponent $Paginator
 */
class RelatedimagesController extends AppController {

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
		$this->Relatedimage->recursive = 0;
		$this->set('relatedimages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Relatedimage->exists($id)) {
			throw new NotFoundException(__('Invalid relatedimage'));
		}
		$options = array('conditions' => array('Relatedimage.' . $this->Relatedimage->primaryKey => $id));
		$this->set('relatedimage', $this->Relatedimage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relatedimage->create();
			if ($this->Relatedimage->save($this->request->data)) {
				$this->Session->setFlash(__('The relatedimage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relatedimage could not be saved. Please, try again.'));
			}
		}
		$castings = $this->Relatedimage->Casting->find('list');
		$plasters = $this->Relatedimage->Plaster->find('list');
		$this->set(compact('castings', 'plasters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Relatedimage->exists($id)) {
			throw new NotFoundException(__('Invalid relatedimage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Relatedimage->save($this->request->data)) {
				$this->Session->setFlash(__('The relatedimage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relatedimage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Relatedimage.' . $this->Relatedimage->primaryKey => $id));
			$this->request->data = $this->Relatedimage->find('first', $options);
		}
		$castings = $this->Relatedimage->Casting->find('list');
		$plasters = $this->Relatedimage->Plaster->find('list');
		$this->set(compact('castings', 'plasters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Relatedimage->id = $id;
		if (!$this->Relatedimage->exists()) {
			throw new NotFoundException(__('Invalid relatedimage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Relatedimage->delete()) {
			$this->Session->setFlash(__('The relatedimage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The relatedimage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
