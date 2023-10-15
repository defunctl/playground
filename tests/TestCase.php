<?php declare(strict_types=1);

namespace Tests;

use Mockery;

class TestCase extends \PHPUnit\Framework\TestCase {

	protected function tearDown(): void {
		Mockery::close();

		parent::tearDown();
	}

}
