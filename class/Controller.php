<?php

include_once 'constants.php';

class Controller
{
	# these variables can't used by other classes, just on get method (getObj)
	private $user;
	private $vehicles;
	private $view;
	private $model;


	function __construct()
	{
		if (!isset($_SESSION)) {
			session_start();
		}

	}

	public function instanceObj()
	{
		# Add new instance of Classes
		$this->model = new Model();
		$this->view = new View();
		$this->user = new User();
		$this->vehicles = new Vehicles();
	}

	// Return it my object for index.php or other page
	function getObj($obj)
	{
		return $this->$obj;
	}
}