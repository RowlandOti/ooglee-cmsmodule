<?php namespace Ooglee\Infrastructure\Config\Facades;

use Illuminate\Support\Facades\Facade;

class OogleeCmsConfigFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() 
	{ 
		return 'ooglee-cms.config'; 
	}

}
