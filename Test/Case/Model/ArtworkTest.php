<?php
App::uses('Artwork', 'Model');

/**
 * Artwork Test Case
 *
 */
class ArtworkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artwork',
		'app.casting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Artwork = ClassRegistry::init('Artwork');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artwork);

		parent::tearDown();
	}

}
