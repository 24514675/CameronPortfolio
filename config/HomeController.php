<?php

class HomeController extends BaseController {
	/*
	This shows the link between the Homecontroller and the BaseController. 
	*/
	public function showWelcome()
	{
		return View::make('questionnaires');
	}

}