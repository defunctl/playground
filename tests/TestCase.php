<?php declare(strict_types=1);

namespace Tests;

use DI\Container;
use Mockery;

class TestCase extends \PHPUnit\Framework\TestCase {

	protected Container $container;

	protected function setUp(): void {
		parent::setUp();

		$this->container = new Container();
	}

	protected function tearDown(): void {
		Mockery::close();

		parent::tearDown();
	}

}
