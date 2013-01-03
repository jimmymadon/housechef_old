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
  
  public function testValidation() {
    // write a test case to fail
    // implement a solution
    // run test to pass
    $data = array(
      'user_id' => null,
      'cooking_style' => null,
      'cooking_experience' => null
    );
    $this->assertFalse($this->Chef->save($data));
    $this->assertEquals('User id cannot be empty', $this->Chef->validationErrors['user_id'][0]);
  }
}
