<?php

return array(
	/*
    	This will show detailed error messages. 
	*/
	'debug' => true,
	/*
	When using Artisan tasks, this URL will serve as a root for the GUI
	*/
	'url' => 'http://localhost',
	/*
	An encryption key used to make sure all data is safe during transmission
	*/

	'key' => 'keyxfVQU8UntXg8V9QuNgs7klPkew"1x',

	/*
	This code adds certain packages that will help the functionality and usability of the application
	*/

	'providers' => array(

		'Illuminate\Auth\AuthServiceProvider',
		'Illuminate\Cache\CacheServiceProvider',
		'Illuminate\Foundation\Providers\CommandCreatorServiceProvider',
		'Illuminate\Session\CommandsServiceProvider',
		'Illuminate\Foundation\Providers\ComposerServiceProvider',
		'Illuminate\Routing\ControllerServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
		'Illuminate\Encryption\EncryptionServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Html\HtmlServiceProvider',
		'Illuminate\Foundation\Providers\KeyGeneratorServiceProvider',
		'Illuminate\Log\LogServiceProvider',
		'Illuminate\Foundation\Providers\MaintenanceServiceProvider',
		'Illuminate\Database\MigrationServiceProvider',
		'Illuminate\Foundation\Providers\OptimizeServiceProvider',
		'Illuminate\Pagination\PaginationServiceProvider',
		'Illuminate\Foundation\Providers\PublisherServiceProvider',
		'Illuminate\Redis\RedisServiceProvider',
		'Illuminate\Auth\Reminders\ReminderServiceProvider',
		'Illuminate\Foundation\Providers\RouteListServiceProvider',
		'Illuminate\Foundation\Providers\ServerServiceProvider',
		'Illuminate\Translation\TranslationServiceProvider',
		'Illuminate\Validation\ValidationServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Workbench\WorkbenchServiceProvider',

	),


	/*
	This code adds certain aliases that will help the functionality and usability of the application
	*/

	'aliases' => array(

		'App'             => 'Illuminate\Support\Facades\App',
		'Auth'            => 'Illuminate\Support\Facades\Auth',
		'Cache'           => 'Illuminate\Support\Facades\Cache',
		'ClassLoader'     => 'Illuminate\Support\ClassLoader',
		'Config'          => 'Illuminate\Support\Facades\Config',
		'Controller'      => 'Illuminate\Routing\Controllers\Controller',
		'Database'        => 'Illuminate\Support\Facades\DB',
		'Eloquent'        => 'Illuminate\Database\Eloquent\Model',
		'File'            => 'Illuminate\Support\Facades\File',
		'HTML'            => 'Illuminate\Support\Facades\HTML',
		'Input'           => 'Illuminate\Support\Facades\Input',
		'Lang'            => 'Illuminate\Support\Facades\Lang',
		'Log'             => 'Illuminate\Support\Facades\Log',
		'Password'        => 'Illuminate\Support\Facades\Password',
		'Queue'           => 'Illuminate\Support\Facades\Queue',
		'Redirect'        => 'Illuminate\Support\Facades\Redirect',
		'Redis'           => 'Illuminate\Support\Facades\Redis',
		'Request'         => 'Illuminate\Support\Facades\Request',
		'Response'        => 'Illuminate\Support\Facades\Response',
		'Route'           => 'Illuminate\Support\Facades\Route',
		'Seeder'          => 'Illuminate\Database\Seeder',
		'Session'         => 'Illuminate\Support\Facades\Session',
		'URL'             => 'Illuminate\Support\Facades\URL',
		'Validator'       => 'Illuminate\Support\Facades\Validator',
		'View'            => 'Illuminate\Support\Facades\View',

	),

);
