<?php

class Criba {

	private $upTo;
	private $marks;

	private static $PRIME = true;

	public function __construct(
		$upTo
	) {
		$this->upTo = $upTo;
		$this->buildCriba();
	}

	private function buildCriba(
	) {
		$this->cleanCriba();
		for ($n = 2; $n <= $this->upTo; $n++) {
			if ($this->marks[$n] == self::$PRIME) {
				for ($multipleOfN = 2 * $n; $multipleOfN <= $this->upTo; $multipleOfN += $n) {
					$this->marks[$multipleOfN] = !self::$PRIME;
				}
			}
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
			if ($this->marks[$number] == self::$PRIME) {
				$primes []= $number;
			}
		}
		return $primes;
	}

}
