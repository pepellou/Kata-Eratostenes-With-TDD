<?php

class Criba {

	private $upTo;
	private $marks;

	private static $PRIME = true;

	public function __construct(
		$upTo
	) {
		$this->upTo = $upTo;
		$this->cleanCriba();
		$this->fillCriba();
	}

	private function fillCriba(
	) {
		for ($n = 2; $n <= $this->upTo; $n++) {
			$this->markMultiplesIfPrime($n);
		}
	}

	private function markMultiplesIfPrime(
		$n
	) {
		if ($this->isPrime($n)) {
			$this->markMultiplesOf($n);
		}
	}

	private function isPrime(
		$n
	) {
		return ($this->marks[$n] == self::$PRIME);
	}

	private function markMultiplesOf(
		$n
	) {
		for ($multipleOfN = 2 * $n; $multipleOfN <= $this->upTo; $multipleOfN += $n) {
			$this->marks[$multipleOfN] = !self::$PRIME;
		}
	}

	private function cleanCriba(
	) {
		$this->marks = array();
		for ($n = 2; $n <= $this->upTo; $n++) {
			$this->marks[$n] = self::$PRIME;
		}
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

}
