<?php
App::uses('Exhibit', 'Model');

/**
 * Exhibit Test Case
 *
 */
class ExhibitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exhibit',
		'app.casting',
		'app.artwork',
		'app.owner',
		'app.plaster',
		'app.relatedimage',
		'app.castings_exhibit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Exhibit = ClassRegistry::init('Exhibit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Exhibit);

		parent::tearDown();
	}

}
