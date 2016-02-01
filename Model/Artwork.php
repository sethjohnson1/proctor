<?php
App::uses('AppModel', 'Model');

class Artwork extends AppModel {

	public $actsAs = array('Search.Searchable'); //makes searchable
	public $filterArgs = array(
		'searchdata'=>array('type' => 'like','field'=>array('Artwork.name'))
	);


	public $hasMany = array(
		'Casting' => array(
			'className' => 'Casting',
			'foreignKey' => 'artwork_id',
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
