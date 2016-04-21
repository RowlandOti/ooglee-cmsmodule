<?php

/**
 * Ooglee-cms configuration settings
 */
return array(

	/**
	 * The Cms configuration when listing resource
	 */
	'cms_index' => array(
		/**
		 * The index page to use for listing resource
		 * 
		 */
		'index' => 'ooglee-cms::site.cms.index',
		/**
		 * The admin index page to use for listing resource
		 * 
		 */
		'index_admin' => 'ooglee-cms::admin.cms.index',
		/**
		 * How many cmss per page
		 */
    	'results_per_page' => 5,
	),

	/**
	 * The Cms configuration when viewing resource
	 */
	'cms_view' => array(
		/**
		 * The view page to use for showing resource
		 * 
		 */
		'view' => 'ooglee-cms::site.cms.view',
	),

	/**
	 * The Cms configuration when creating resource
	 */
	'cms_create' => array(
		/**
		 * The view page to use for creating resource
		 * 
		 */
		'view' => 'ooglee-cms::admin.cms.create',
	),

	/**
	 * The Cms configuration when editing resource
	 */
	'cms_edit' => array(
		/**
		 * The view page to use for editing resource
		 * 
		 */
		'view' => 'ooglee-cms::admin.cms.edit',
	),

	/**
	 * The Cms routes to use with our package
	 */
	'cms_routes' => array(
		/**
		 * Determines whether to load the package routes. If you want to specify them yourself in your own `app/routes.php`
		 * file then set this to false.
		 */
		'path_structure' => '{year}/{month}/{day}'
		/**
		 * Determines whether to load the package routes. If you want to specify them yourself in your own `app/routes.php`
		 * file then set this to false.
		 */
	),

	/**
	 * The Cms routes to use with our package
	 */
	'routes' => array(
    	/**
		 * Base URI of the package's pages, e.g. "cms" in http://domain.com/cms and http://domain.com/cms/my-cms
		 */
		'base_uri' => 'cms',
		/**
		 * Base URI of the package's pages, e.g. "cms" in http://domain.com/cms and http://domain.com/cms/my-cms
		 */
		'base_uri_admin' => 'admin/cms'
	),
);