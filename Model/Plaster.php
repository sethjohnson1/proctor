<?php
App::uses('AppModel', 'Model');
/**
 * Plaster Model
 *
 * @property Casting $Casting
 * @property Relatedimage $Relatedimage
 */
class Plaster extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Casting' => array(
			'className' => 'Casting',
			'foreignKey' => 'plaster_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Relatedimage' => array(
			'className' => 'Relatedimage',
			'foreignKey' => 'plaster_id',
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
