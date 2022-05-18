<?php
return array(
	/*
		this sets "database" as the default cacheing libray to pull the user infromation from and stored completed questionnaires. 
	*/
	'Database' => 'array',
	'path' => storage_path().'/cache',
	/*
	This shows when using the database the information can be pulled by the users at there request. 
	*/
	'connection' => null,
	/*
	This shows the database name and the information which needs to be stored inside showing the stored completed questionnaires. And the connection being null when not accessed to add security. 
	*/
	'Questionnaire Database' => 'cache',
	/*
	This shows the values being set for the arrays. 
	*/
	'memcached' => array(

		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),
	),
	/*
	This is adding specifications on which cache is being accessed at one time. 
	*/

	'prefix' => 'laravel',
);

);