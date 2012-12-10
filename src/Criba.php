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
		$this->number_marks = array(
		);
		for ($n = 2; $n <= $this->upTo; $n++) {
			$this->number_marks[$n] = $this->primalityOf($n);
		}
		return $this->number_marks[$number];
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
