<?php

class Criba {

	private $upTo;
	private $numbers_list;

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
			if ($this->numbers_list[$n] == self::$PRIME) {
				for ($multipleOfN = 2 * $n; $multipleOfN <= $this->upTo; $multipleOfN += $n) {
					$this->numbers_list[$multipleOfN] = !self::$PRIME;
				}
			}
		}
	}

	private function cleanCriba(
	) {
		$this->numbers_list = array();
		for ($n = 2; $n <= $this->upTo; $n++) {
			$this->numbers_list[$n] = self::$PRIME;
		}
	}

	public function getPrimes(
	) {
		$primes = array();
		for ($number = 2; $number <= $this->upTo; $number++) {
			if ($this->numbers_list[$number] == self::$PRIME) {
				$primes []= $number;
			}
		}
		return $primes;
	}

}
