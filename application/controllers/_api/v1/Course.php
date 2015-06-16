<?php

class Course extends API_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index_get()
	{
		echo "Course API";
	}
}