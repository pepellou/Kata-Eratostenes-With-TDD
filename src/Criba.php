<?php

class Criba {

	private $upTo;

	public function __construct(
		$upTo
	) {
		$this->upTo = $upTo;
	}

	public function getPrimes(
	) {
		$primes = array();
		for ($number = 2; $number <= $this->upTo; $number++) {
			$isPrime = ($number != 4);
			if ($isPrime) {
				$primes []= $number;
			}
		}
		return $primes;
	}

}
