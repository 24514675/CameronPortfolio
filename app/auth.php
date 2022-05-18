<?php

return array(
	/*
		This sets the authentication driver to eloquent
	*/
	'driver' => 'eloquent',
	/*
		This sets the eloquent driver so it knows which side to use creator or user. 
	*/
	'model' => 'User',
	/*
		This helps the users information get pulled from the database of users. 
	*/
	'table' => 'users',
	/*
	this sets the password requirments for the users to log in to which area they wish to access and protects the produced system and information. 
	*/
	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);