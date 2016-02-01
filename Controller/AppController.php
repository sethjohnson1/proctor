<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $components = array('DebugKit.Toolbar','Session','Auth');
	
	
	public function beforeFilter() {
		
		if (Configure::read('allowAll')=='yes') $this->Auth->allow();
		
		//define all allowed methods explicitly for this project, slap your head if you're here because your new method doesn't work
		else $this->Auth->allow('front','frontview','essays','about');

	}
	
}
