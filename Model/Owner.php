<?php
App::uses('AppModel', 'Model');
/**
 * Owner Model
 *
 * @property Casting $Casting
 */
class Owner extends AppModel {

	public $displayField = 'owner';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Casting' => array(
			'className' => 'Casting',
			'foreignKey' => 'owner_id',
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
