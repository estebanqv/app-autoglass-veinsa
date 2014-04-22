<?php
App::uses('TaskStep', 'Model');

/**
 * TaskStep Test Case
 *
 */
class TaskStepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.task_step'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaskStep = ClassRegistry::init('TaskStep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaskStep);

		parent::tearDown();
	}

}
