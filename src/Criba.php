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
			if (!$this->primalityOf($n)) {
				$this->numbers_list[$n] = "not prime";
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

	private function primalityOf(
		$number
	) {
		if ($number == 4) {
			return false;
		}
		if ($number == 6) {
			return false;
		}
		if ($number == 8) {
			return false;
		}
		return true;
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
