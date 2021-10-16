<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
// 		$this->load->model('Home_model');
		//$this->load->library('access');
		$this->load->library('session');
		//$this->load->helper('url');
		//$this->load->library('recaptcha');
		
		
	}
 	
	public function index() {
	
		$data_head['title'] = "Candra Dwi Prasetyo";
		
 		$this->load->view('layout/header', $data_head);
		$this->load->view('home/index');
		$this->load->view('layout/footer'); 
		
 	}

 	public function portfolio($id) {
		$this->load->view('home/homepage/portfolio/'.$id);
 	}

 	function dark_mode($type) {
        if ($type == 1) {
            $this->session->set_userdata('pw_dark_mode', $type);
        } else {
            unset($_SESSION['pw_dark_mode']);
        }
    }
	
}