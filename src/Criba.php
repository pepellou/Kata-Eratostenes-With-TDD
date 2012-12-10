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
		for ($multiple = 2 * $n; $multiple <= $this->upTo; $multiple += $n) {
			$this->marks[$multiple] = !self::$PRIME;
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
		return array_keys(array_filter($this->marks));
	}

}
