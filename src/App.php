<?php declare(strict_types=1);

namespace App;

use InvalidArgumentException;
use Psr\Container\ContainerInterface;
use RuntimeException;

final class App {

	private static self $instance;

	private function __construct(
		private readonly ContainerInterface $container
	) {
	}

	public static function instance( ?ContainerInterface $container ): App {
		if ( ! isset( self::$instance ) ) {
			if ( ! $container ) {
				throw new InvalidArgumentException( 'You need to provide a container' );
			}

			self::$instance = new self( $container );
		}

		return self::$instance;
	}

	public function container(): ContainerInterface {
		return $this->container;
	}

	private function __clone() {
	}

	public function __wakeup(): void {
		throw new RuntimeException( 'method not implemented' );
	}

	public function __sleep(): array {
		throw new RuntimeException( 'method not implemented' );
	}

}
