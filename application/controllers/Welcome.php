<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


function __construct()
	{
		parent::__construct();
		$this->load->helper('function_helper');
		$this->load->library('date');
	}
	public function index()
	{
		$number = 7;
		$check = roman($number);
		$data['roman'] = 'Angka romawi dari bilangan '.$number.' adalah '.$check;
		$data['decimal'] = 'Angka decimal dari bilangan '.$check.' adalah '.romanToDecimal($check);
		$data['date'] = 'Tanggal hari ini adalah '.$this->date->get_formatted_date();
		$data['date2'] = 'Tanggal hari ini adalah '.$this->date->get_formatted_date_with_month();
		$this->load->view('welcome_message', $data);
	}



	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->helper('function_helper');
	// }
	// public function index()
	// {
	// 	$number = 24;
	// 	$check = noPrime($number);
	// 	$data['result'] = $check ? $number . ' is Prime Number' : $number . ' is not Prime number'; 
	// 	$this->load->view('welcome_message', $data);
	// }
	
	
	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('aritmatika');
	// }
	// public function index()
	// {
	// 	$a = 2;
	// 	$b = 3;
	// 	$data['result'] = $a . ' + '. $b .' = ' .$this->aritmatika->plus($a, $b);
	// 	$this->load->view('welcome_message', $data);
	// }
}
