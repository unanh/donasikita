<?php

/**
* 
*/
class Overview extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	
	}

	function index(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}else{
		$this->load->view('admin/overview');
		}
	}
}