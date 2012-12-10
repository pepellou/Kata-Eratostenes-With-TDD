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

	public function getPrimes(
	) {
		$primes = array();
		for ($number = 2; $number <= $this->upTo; $number++) {
			if ($this->numbers_list[$number]) {
				$primes []= $number;
			}
		}
		return $primes;
	}

	private function buildCriba(
	) {
		$this->numbers_list = array();
		for ($n = 2; $n <= $this->upTo; $n++) {
			$this->numbers_list[$n] = $this->primalityOf($n);
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

}
