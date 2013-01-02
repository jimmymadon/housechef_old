<?php
App::uses('Chef', 'Model');

/**
 * Chef Test Case
 *
 */
class ChefTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.chef',
		'app.user',
		'app.dish'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Chef = ClassRegistry::init('Chef');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Chef);

		parent::tearDown();
	}

}
