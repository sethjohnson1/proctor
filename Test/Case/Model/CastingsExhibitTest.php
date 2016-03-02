<?php
App::uses('CastingsExhibit', 'Model');

/**
 * CastingsExhibit Test Case
 *
 */
class CastingsExhibitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.castings_exhibit',
		'app.casting',
		'app.artwork',
		'app.owner',
		'app.plaster',
		'app.relatedimage',
		'app.exhibit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CastingsExhibit = ClassRegistry::init('CastingsExhibit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CastingsExhibit);

		parent::tearDown();
	}

}
