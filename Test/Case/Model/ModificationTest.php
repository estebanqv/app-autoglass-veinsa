<?php
App::uses('Modification', 'Model');

/**
 * Modification Test Case
 *
 */
class ModificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Modification = ClassRegistry::init('Modification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modification);

		parent::tearDown();
	}

}
