<?php
App::uses('AppController', 'Controller');

class CastingsController extends AppController {

	public $components = array('Paginator','Search.Prg');
	public $scaffold;
	public function index() {
		$this->Prg->commonProcess();
		$this->Casting->recursive = 0;
		$this->paginate = array('conditions' => $this->Casting->parseCriteria($this->Prg->parsedParams()));
		$this->set('castings', $this->paginate());
	}

	/* disabled so that scaffold takes care of it
	public function view($id = null) {
		if (!$this->Casting->exists($id)) {
			throw new NotFoundException(__('Invalid casting'));
		}
		$options = array('conditions' => array('Casting.' . $this->Casting->primaryKey => $id));
		$this->set('casting', $this->Casting->find('first', $options));
	}
	*/

	public function add() {
		if ($this->request->is('post')) {
			//clean whitespace, build related images into proper format for automagic saving
			$relimg = preg_replace('/\s+/', '', $this->request->data['Relatedimage']['images']);
			$relimg = explode(",",$relimg);
			foreach ($relimg as $key=>$val){
				$this->request->data['Relatedimage'][$key]['name']=$val;
				$this->request->data['Relatedimage'][$key]['seq']=$key;
			}
			//if you don't unset this it drops a needless NULL into Relatedimage
			unset($this->request->data['Relatedimage']['images']);
			$this->Casting->create();
			if ($this->Casting->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The casting has been saved. Yay Sylvia!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casting could not be saved. Please, try again.'));
			}
			
		}
		$artworks = $this->Casting->Artwork->find('list');
		$owners = $this->Casting->Owner->find('list');
		$plasters = $this->Casting->Plaster->find('list');
		$exhibits = $this->Casting->Exhibit->find('list');
		$forges = $this->Casting->Forge->find('list');
		$this->set(compact('artworks', 'owners', 'plasters', 'exhibits','forges'));
	}

	public function edit($id = null) {
		if (!$this->Casting->exists($id)) {
			throw new NotFoundException(__('Invalid casting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//clean whitespace, build related images into proper format for automagic saving
			$relimg = preg_replace('/\s+/', '', $this->request->data['Relatedimage']['images']);
			$relimg = explode(",",$relimg);
			foreach ($relimg as $key=>$val){
				$this->request->data['Relatedimage'][$key]['name']=$val;
				$this->request->data['Relatedimage'][$key]['seq']=$key;
			}
			//if you don't unset this it drops a needless NULL into Relatedimage
			unset($this->request->data['Relatedimage']['images']);
			//remove relatedimg associations, they will be rebuilt. The FLAW here is that if the save is not successful it still deleted relatedimage data. oh well for now
			$this->Casting->Relatedimage->deleteAll(array('Relatedimage.casting_id'=>$id),false);
			//$this->Casting->id = $id;
			if ($this->Casting->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The casting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Casting.' . $this->Casting->primaryKey => $id));
			$this->request->data = $this->Casting->find('first', $options);
		}
		$artworks = $this->Casting->Artwork->find('list');
		$owners = $this->Casting->Owner->find('list');
		$plasters = $this->Casting->Plaster->find('list');
		$exhibits = $this->Casting->Exhibit->find('list');
		$forges = $this->Casting->Forge->find('list');
		$this->set(compact('artworks', 'owners', 'plasters', 'exhibits','relatedimages','forges'));
		//sj - added this for the list of relatedimages
		$relimg = $this->Casting->Relatedimage->find('list',array('conditions'=>array('Relatedimage.casting_id'=>$id)));
		$this->set('relimg', implode(",",$relimg));
		$this->set('edit',1);
		$this->render('add','default');
		
	}

	public function delete($id = null) {
		$this->Casting->id = $id;
		if (!$this->Casting->exists()) {
			throw new NotFoundException(__('Invalid casting'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Casting->delete()) {
			//sj - added this to keep Relatedimage cleaned up
			$this->Casting->Relatedimage->deleteAll(array('Relatedimage.casting_id'=>$id),false);
			$this->Session->setFlash(__('The casting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The casting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
