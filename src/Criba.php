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
		return array($this->upTo);
	}

}
