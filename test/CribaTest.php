<?php

require_once (dirname(__FILE__)."/../src/Criba.php");

class CribaTest extends PHPUnit_Framework_TestCase {

	public function test_2_is_prime(
	) {
		$this->assertEquals(
			array(2),
			Criba::primesUpTo(2)
		);
	}

}
