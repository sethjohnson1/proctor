<?php
App::uses('Plaster', 'Model');

/**
 * Plaster Test Case
 *
 */
class PlasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plaster',
		'app.casting',
		'app.artwork',
		'app.owner',
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
		$this->Plaster = ClassRegistry::init('Plaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plaster);

		parent::tearDown();
	}

}
