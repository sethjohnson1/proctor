<?php
App::uses('AppModel', 'Model');

class Relatedimage extends AppModel {

	public $belongsTo = array(
		'Casting' => array(
			'className' => 'Casting',
			'foreignKey' => 'casting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plaster' => array(
			'className' => 'Plaster',
			'foreignKey' => 'plaster_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
