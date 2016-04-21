<?php namespace Ooglee\Domain\Providers;

use Ooglee\Domain\Providers\LaravelServiceProvider;
use Ooglee\Infrastructure\Config\OogleeCmsConfig;

class OogleeCmsServiceProvider extends LaravelServiceProvider {

	protected $packageVendor = 'rowland';

	protected $packageName = 'ooglee-cms';

	protected $packageDir = __DIR__;

	protected $packageNameCapitalized = 'Ooglee-cms';

	protected $packageConfigClass = 'Ooglee\Infrastructure\Config\OogleeCmsConfig';

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
 		parent::register();

 		\App::register('Ooglee\Domain\Providers\RouteCmsServiceProvider');
		\App::register('Ooglee\Domain\Providers\EventCmsServiceProvider');

		// Third Party Service Providers

		/**
        * This allows the facade to work without the developer having to add it to the Alias array in config/app.php
        * http://fideloper.com/create-facade-laravel-4
        * Works for L5 too
        */
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();

			$loader->alias('OogleeCConfig', 'Ooglee\Infrastructure\Config\Facades\OogleeCmsConfigFacade');

			// Third Party Facades
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}
