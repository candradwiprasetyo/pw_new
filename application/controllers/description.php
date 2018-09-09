<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Description extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
 	
	public function index() {
	
		$this->load->view('layout_wedding/description');
		
 	}
	
}