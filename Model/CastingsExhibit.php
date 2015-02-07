<?php
App::uses('AppModel', 'Model');
/**
 * CastingsExhibit Model
 *
 * @property Casting $Casting
 * @property Exhibit $Exhibit
 */
class CastingsExhibit extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Casting' => array(
			'className' => 'Casting',
			'foreignKey' => 'casting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Exhibit' => array(
			'className' => 'Exhibit',
			'foreignKey' => 'exhibit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
