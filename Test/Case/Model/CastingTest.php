<?php
App::uses('Casting', 'Model');

/**
 * Casting Test Case
 *
 */
class CastingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.casting',
		'app.artwork',
		'app.owner',
		'app.plaster',
		'app.relatedimage',
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
		$this->Casting = ClassRegistry::init('Casting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Casting);

		parent::tearDown();
	}

}
