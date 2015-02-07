<?php
App::uses('AppModel', 'Model');

class Casting extends AppModel {

	public $actsAs = array('Search.Searchable'); //makes searchable
	public $filterArgs = array(
		'searchdata'=>array('type' => 'like','field'=>array(
			'Casting.name',
			'Artwork.name',
			'Owner.owner',
			'Casting.castnumber',
			'Casting.acqdate',
			'Casting.creditline',
			'Casting.metallurgy',
			'Casting.provenance',
			'Casting.commentary',
			'Casting.castingmethod',
			'Casting.idnumbers'
		))
	);

	public $belongsTo = array(
		'Artwork' => array(
			'className' => 'Artwork',
			'foreignKey' => 'artwork_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Owner' => array(
			'className' => 'Owner',
			'foreignKey' => 'owner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Forge' => array(
			'className' => 'Forge',
			'foreignKey' => 'forge_id',
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

	public $hasMany = array(
		'Relatedimage' => array(
			'className' => 'Relatedimage',
			'foreignKey' => 'casting_id',
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

	public $hasAndBelongsToMany = array(
		'Exhibit' => array(
			'className' => 'Exhibit',
			'joinTable' => 'castings_exhibits',
			'foreignKey' => 'casting_id',
			'associationForeignKey' => 'exhibit_id',
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
