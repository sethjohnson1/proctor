<?php
App::uses('AppController', 'Controller');

class PlastersController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Plaster->recursive = 0;
		$this->set('plasters', $this->Paginator->paginate());
	}


	public function view($id = null) {
		if (!$this->Plaster->exists($id)) {
			throw new NotFoundException(__('Invalid plaster'));
		}
		$options = array('conditions' => array('Plaster.' . $this->Plaster->primaryKey => $id));
		$this->set('plaster', $this->Plaster->find('first', $options));
	}


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
			$this->Plaster->create();
			if ($this->Plaster->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The plaster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plaster could not be saved. Please, try again.'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->Plaster->exists($id)) {
			throw new NotFoundException(__('Invalid plaster'));
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
			$this->Plaster->Relatedimage->deleteAll(array('Relatedimage.plaster_id'=>$id),false);
			if ($this->Plaster->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The plaster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plaster could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plaster.' . $this->Plaster->primaryKey => $id));
			$this->request->data = $this->Plaster->find('first', $options);
		}
		//sj - added this for the list of relatedimages
		$relimg = $this->Plaster->Relatedimage->find('list',array('conditions'=>array('Relatedimage.plaster_id'=>$id)));
		$this->set('relimg', implode(",",$relimg));
	}

	public function delete($id = null) {
		$this->Plaster->id = $id;
		if (!$this->Plaster->exists()) {
			throw new NotFoundException(__('Invalid plaster'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plaster->delete()) {
			//sj - added this to keep Relatedimage cleaned up
			$this->Plaster->Relatedimage->deleteAll(array('Relatedimage.plaster_id'=>$id),false);
			$this->Session->setFlash(__('The plaster has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plaster could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
