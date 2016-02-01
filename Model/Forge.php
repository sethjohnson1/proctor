<?php
App::uses('AppModel', 'Model');

class Forge extends AppModel {

	public $hasMany = array(
		'Casting' => array(
			'className' => 'Casting',
			'foreignKey' => 'forge_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
