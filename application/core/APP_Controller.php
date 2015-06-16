<?php

class APP_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function traceData($data = null)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}
}

class API_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_init();
	}

	private function _init()
	{
		$this->load->library('response');
	}
}