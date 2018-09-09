<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wedding extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
 	
	public function index() {
	
		$data_head['title'] = "Candra Dwi Prasetyo";
		
 		$this->load->view('layout_wedding/header', $data_head);
		$this->load->view('layout_wedding/content');
		$this->load->view('layout_wedding/footer');
		
 	}
	
}