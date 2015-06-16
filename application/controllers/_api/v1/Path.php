<?php

class Path extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('path_model');
	}

	public function lists()
	{
		$paths = $this->path_model->get_all_paths();
		return $this->response->json($paths);
	}

	public function info($id = null)
	{
		$path = $this->path_model->get_path_info_by_id( $id );
		return $this->response->json($path);	
	}

	public function create()
	{
		$path = $this->path_model->create_new_path();
		return $this->response->json($path);
	}

	public function update($id = null)
	{
		echo "Update Path";
	}

	public function delete($id = null)
	{
		echo "Delete Path";
	}
}