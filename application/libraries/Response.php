<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Response {

	public $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function json($data = null)
	{
		$this->CI->output->set_content_type('application/json')->set_output(json_encode( $data ));
	}
}