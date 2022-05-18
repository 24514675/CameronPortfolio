<?php

return array(
	/*
	This shows the user pulling the selected data from the database.
	*/
	'fetch' => PDO::FETCH_Questionnaire,
	/*
		This shows the specified link to be directly to the questionnaire database. 
	*/
	'default' => 'mysql',
	/*
	This shows the default database to be ran and sorted through mysql.
	*/
	'connections' => array(
		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => 'database/sqlite',
			'prefix'   => '',
		),
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),
	/*
		This shows a tracking of the migrations which have been run on the database and the searches that have been made. 
	*/
	'migrations' => 'migrations',
	/*
	This makes it easier for the user to search through the databases and find the required content they want. 
	*/
);
