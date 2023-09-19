<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aritmatika extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->libraries('function_helper');
	}
	public function index()
	{
		$this->load->library('aritmatika');
		$data['result'] = $this->aritmatika->divide(2, 3);
		$this->load->view('welcome_message', $data);
	}

}
