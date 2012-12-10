<?php

class Criba {

	private $upTo;
	private $numbers_list;

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
			for ($multipleOfN = 2 * $n; $multipleOfN <= $this->upTo; $multipleOfN += $n) {
				$this->numbers_list[$multipleOfN] = "not prime";
			}
		}
	}

	private function cleanCriba(
	) {
		$this->numbers_list = array();
		for ($n = 2; $n <= $this->upTo; $n++) {
			$this->numbers_list[$n] = "prime";
		}
	}

	public function getPrimes(
	) {
		$primes = array();
		for ($number = 2; $number <= $this->upTo; $number++) {
			if ($this->numbers_list[$number] == "prime") {
				$primes []= $number;
			}
		}
		return $primes;
	}

}
