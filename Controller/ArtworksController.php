<?php
App::uses('AppController', 'Controller');

class ArtworksController extends AppController {

	public $components = array('Paginator','Search.Prg','Leftnav');

	public function index() {
		$this->Prg->commonProcess();
		$this->Artwork->recursive = 0;
		$this->paginate = array('conditions' => $this->Artwork->parseCriteria($this->Prg->parsedParams()));
		$this->set('artworks', $this->paginate());
	}

	public function front() {
		$this->Prg->commonProcess();
		$this->Artwork->recursive = 0;
		$this->paginate = array('conditions' => $this->Artwork->parseCriteria($this->Prg->parsedParams()));
		$artworks=$this->paginate();
		$left_nav_menu=$this->Leftnav->casting_global_left_nav();
		//use this flag so only the mobile menu is displayed
		$hide_left_nav=1;
		$this->set(compact('artworks', 'left_nav_menu','hide_left_nav'));
		$this->render('front','front_end');
	}


	public function view($id = null) {
		//recursion to 2 so we can see Owner name in view. If lots of data this could cause performance issues (although I don't think it ever will)
		$this->Artwork->recursive = 2;
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
					debug($this->request->data);
				$this->Session->setFlash(__('The artwork has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artwork could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Artwork.' . $this->Artwork->primaryKey => $id));
			$this->request->data = $this->Artwork->find('first', $options);
		}
		$this->set('edit',1);
		$this->render('add','default');
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
}
