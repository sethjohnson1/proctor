<?php
App::uses('Relatedimage', 'Model');

/**
 * Relatedimage Test Case
 *
 */
class RelatedimageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.relatedimage',
		'app.casting',
		'app.artwork',
		'app.owner',
		'app.plaster',
		'app.exhibit',
		'app.castings_exhibit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Relatedimage = ClassRegistry::init('Relatedimage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Relatedimage);

		parent::tearDown();
	}

}
