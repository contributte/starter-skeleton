<?php declare(strict_types = 1);

namespace App;

use Contributte\Bootstrap\ExtraConfigurator;

class Bootstrap
{

	public static function boot(): ExtraConfigurator
	{
		$configurator = new ExtraConfigurator();

		$configurator->setEnvDebugMode();
		$configurator->enableTracy(__DIR__ . '/../var/log');

		$configurator->setTimeZone('Europe/Prague');
		$configurator->setTempDirectory(__DIR__ . '/../var/tmp');

		$configurator->addConfig(__DIR__ . '/../config/config.neon');

		if (file_exists(__DIR__ . '/../config/local.neon')) {
			$configurator->addConfig(__DIR__ . '/../config/local.neon');
		}

		return $configurator;
	}

}
