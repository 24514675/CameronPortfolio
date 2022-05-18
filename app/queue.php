<?php

return array(
	/*
	This shows the back end code for the project and the required areas which need to be included. 
	*/
	'default' => 'sync',
	'connections' => array(

		'sync' => array(
			'driver' => 'sync',
		),
		'questionnaire' => array(
			'driver' => 'questionnaire',
			'host'   => 'localhost',
			'queue'  => 'default',
			'questionnaire' => 'see responses'
		),
		'sqs' => array(
			'driver' => 'sqs',
			'key'    => 'your-public-key',
			'secret' => 'your-secret-key',
			'queue'  => 'your-queue-url',
		),
	),

);
