<?php

class Path_Model extends APP_Model {

	public $id;
	public $name;
	public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_paths()
	{
		$query = $this->db->get('path');
		return $query->result();
	}

	public function get_path_info_by_id( $id = null )
	{
		$this->db->where('id', $id);
		$query = $this->db->get('path');
		return $query->row();
	}

	public function create_new_path()
	{
		$data = $this->input->post();
		if ( $this->db->insert('path', $data) ) {
			$data['id'] = $this->db->insert_id();
			return $data;
		} else {
			return $this->db->error();
		}
	}
}