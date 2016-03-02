<?php
App::uses('AppModel', 'Model');
/**
 * Exhibit Model
 *
 * @property Casting $Casting
 */
class Exhibit extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Casting' => array(
			'className' => 'Casting',
			'joinTable' => 'castings_exhibits',
			'foreignKey' => 'exhibit_id',
			'associationForeignKey' => 'casting_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
