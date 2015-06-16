<?php 

class Path extends APP_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('path_model');
	}

	public function index()
	{
		$paths = $this->path_model->get_all_paths();
		$this->traceData($paths);
	}

	public function info($id = null)
	{
		$path = file_get_contents('http://localhost/online-school/_api/path/'.$id);
		$this->traceData( json_decode($path) );
	}
}