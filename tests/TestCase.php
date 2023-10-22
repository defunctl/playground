<?php declare(strict_types=1);

namespace Tests;

use Mockery;
use Psr\Container\ContainerInterface;

class TestCase extends \PHPUnit\Framework\TestCase {

	protected ContainerInterface $container;

	protected function setUp(): void {
		parent::setUp();

		$this->container = app()->container();
	}

	protected function tearDown(): void {
		Mockery::close();

		parent::tearDown();
	}

}
