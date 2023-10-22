<?php declare(strict_types=1);

use App\App;
use DI\ContainerBuilder;

require_once __DIR__ . '/vendor/autoload.php';

function app(): App {
	$builder = new ContainerBuilder();
	$builder->addDefinitions( __DIR__ . '/config.php' );

	return App::instance( $builder->build() );
}
