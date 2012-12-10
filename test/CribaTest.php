<?php

require_once (dirname(__FILE__)."/../src/Criba.php");

class CribaTest extends PHPUnit_Framework_TestCase {

	public function test_2_is_prime(
	) {
		$criba = new Criba(2);

		$this->assertEquals(
			array(2),
			$criba->getPrimes()
		);
	}

	public function test_3_is_prime(
	) {
		$criba = new Criba(3);

		$this->assertEquals(
			array(2, 3),
			$criba->getPrimes()
		);
	}

}
