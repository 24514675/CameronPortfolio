<?php
/*
	This shows the routes in which i have produced to get the feedback and pull the information or create. 
*/
Route::get('/', Data()
{
	return View::make('questionnaire');
});