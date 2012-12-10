<?php

require_once (dirname(__FILE__)."/../src/Criba.php");

class CribaTest extends PHPUnit_Framework_TestCase {

	/**
	* @dataProvider known_primes_lists
	*/
	public function test_known_primes(
		$topValue,
		$expectedPrimesList
	) {
		$criba = new Criba($topValue);

		$this->assertEquals(
			$expectedPrimesList,
			$criba->getPrimes()
		);
	}

	public static function known_primes_lists(
	) {
		return array(
			"up to 2" => array(2, array(2)),
			"up to 3" => array(3, array(2, 3))
		);
	}

}
