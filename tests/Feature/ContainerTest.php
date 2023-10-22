<?php declare(strict_types=1);

namespace Tests\Feature;

use App\Calculator;
use Psr\Container\ContainerInterface;
use Tests\TestCase;

final class ContainerTest extends TestCase {

	public function test_it_gets_correct_instances(): void {
		$this->assertInstanceOf( ContainerInterface::class, $this->container );
		$this->assertInstanceOf( Calculator::class, $this->container->get( Calculator::class ) );
	}

	public function test_it_sets_instances(): void {
		$calculator = new Calculator();

		$this->assertNotSame( $calculator, $this->container->get( Calculator::class ) );

		$this->container->set( Calculator::class, $calculator );

		$this->assertSame( $calculator, $this->container->get( Calculator::class ) );
	}

	public function test_it_gets_sample_definition(): void {
		$this->assertSame( [
			1,
			2,
			3,
		], $this->container->get( 'sample.definition' ) );
	}

}
