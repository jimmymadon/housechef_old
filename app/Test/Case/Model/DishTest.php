<?php
App::uses('Dish', 'Model');

/**
 * Dish Test Case
 *
 */
class DishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dish',
		'app.chef',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dish = ClassRegistry::init('Dish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dish);

		parent::tearDown();
	}
  
  public function testPurchase() {
    // write a test to fail
    $data = array(
      'dish_id' => 'dish-2',
      'quantity' => 1
    );
    
    // create purchase table / model
    // create a test case to add a purchase item
    // assert eqauls on check qty descrease, 9
    $this->Purchase->save($data);
    $purchased = $this->Purchase->Dish->find('first', array(
      'conditions' => array(
        'Dish.id' => 'dish-2'
      )
    ));
    $this->assertEquals(9, $purchased['Dish']['quantity']);   
  }
  
  // use an existing chef
  // add a new dish 1 record
  
  

}
