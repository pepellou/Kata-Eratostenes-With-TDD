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
			"up to 3" => array(3, array(2, 3)),
			"up to 4" => array(4, array(2, 3)),
			"up to 5" => array(5, array(2, 3, 5)),
			"up to 6" => array(6, array(2, 3, 5)),
			"up to 7" => array(7, array(2, 3, 5, 7)),
			"up to 8" => array(8, array(2, 3, 5, 7)),
			"up to 9" => array(9, array(2, 3, 5, 7)),
			"up to 10" => array(10, array(2, 3, 5, 7)),
			"up to 11" => array(11, array(2, 3, 5, 7, 11)),
			"up to 105" => array(105, array(
				2, 3, 5, 7, 11, 13, 17, 19, 23, 29,
				31, 37, 41, 43, 47, 53, 59, 61, 67,
				71, 73, 79, 83, 89, 97, 101, 103
			))
		);
	}

}
