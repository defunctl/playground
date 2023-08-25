<?php declare( strict_types=1 );

namespace App;

final class Calculator {

	public function add( int|float $num1, int|float $num2 ): int|float {
		return $num1 + $num2;
	}

}