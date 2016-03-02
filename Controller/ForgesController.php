<?php
App::uses('AppController', 'Controller');

class ForgesController extends AppController {

	public $components = array('Paginator','Search.Prg');
	public $scaffold;
/* disabled, just use scaffolds for now, also notice it was just an old copy/paste - Artwork must be replaced by Forge
	public function index() {
		$this->Prg->commonProcess();
		$this->Artwork->recursive = 0;
		$this->paginate = array('conditions' => $this->Artwork->parseCriteria($this->Prg->parsedParams()));
		$this->set('artworks', $this->paginate());
	}


	public function view($id = null) {
		if (!$this->Artwork->exists($id)) {
			throw new NotFoundException(__('Invalid artwork'));
		}
		$options = array('conditions' => array('Artwork.' . $this->Artwork->primaryKey => $id));
		$this->set('artwork', $this->Artwork->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Artwork->create();
			if ($this->Artwork->save($this->request->data)) {
				$this->Session->setFlash(__('The artwork has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artwork could not be saved. Please, try again.'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->Artwork->exists($id)) {
			throw new NotFoundException(__('Invalid artwork'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Artwork->save($this->request->data)) {
				$this->Session->setFlash(__('The artwork has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artwork could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Artwork.' . $this->Artwork->primaryKey => $id));
			$this->request->data = $this->Artwork->find('first', $options);
		}
	}


	public function delete($id = null) {
		$this->Artwork->id = $id;
		if (!$this->Artwork->exists()) {
			throw new NotFoundException(__('Invalid artwork'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Artwork->delete()) {
			$this->Session->setFlash(__('The artwork has been deleted.'));
		} else {
			$this->Session->setFlash(__('The artwork could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
*/
}
