<?php declare( strict_types=1 );

namespace Tests\Unit;

use App\Calculator;
use Tests\TestCase;

final class CalculatorTest extends TestCase {

	private Calculator $calculator;

	protected function setUp(): void {
		parent::setUp();

		$this->calculator = new Calculator();
	}

	public function test_it_adds_integers(): void {
		$this->assertSame( 5, $this->calculator->add( 3, 2 ) );
	}

	public function test_it_adds_floats(): void {
		$this->assertSame( 5.1, $this->calculator->add( 3.0, 2.1 ) );
	}

	public function test_it_adds_integers_and_floats(): void {
		$this->assertSame( 5.1, $this->calculator->add( 3, 2.1 ) );
	}

	public function test_it_adds_negative_integers(): void {
		$this->assertSame( -10, $this->calculator->add( -5, -5 ) );
	}

	public function test_it_adds_negative_floats(): void {
		$this->assertSame( -10.1, $this->calculator->add( -5.0, -5.1 ) );
	}

}