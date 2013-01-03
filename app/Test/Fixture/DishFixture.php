<?php
/**
 * DishFixture
 *
 */
class DishFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'chef_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => null),
		'price' => array('type' => 'float', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 'dish-1',
			'chef_id' => 'jimmy-chef-1',
			'title' => 'Jimmy-1\'s first dish.',
			'description' => 'This dish has 10 items.',
			'quantity' => 10,
			'price' => 45,
			'created' => '2013-01-02 20:24:15',
			'modified' => '2013-01-02 20:24:15'
		),
		array(
      'id' => 'dish-2',
      'chef_id' => 'jimmy-chef-1',
      'title' => 'Jimmy-1\'s second dish.',
      'description' => 'This dish has 20 items.',
      'quantity' => 10,
      'price' => 45,
      'created' => '2013-01-02 20:24:15',
      'modified' => '2013-01-02 20:24:15'
    ),
    array(
      'id' => 'dish-3',
      'chef_id' => 'jimmy-chef-1',
      'title' => 'Jimmy-1\'s third dish.',
      'description' => 'This dish has 30 items.',
      'quantity' => 10,
      'price' => 45,
      'created' => '2013-01-02 20:24:15',
      'modified' => '2013-01-02 20:24:15'
    )
	);

}
