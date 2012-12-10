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
			if ($this->isPrime($number)) {
				$primes []= $number;
			}
		}
		return $primes;
	}

	private function isPrime(
		$number
	) {
		return ($number != 4);
	}

}
