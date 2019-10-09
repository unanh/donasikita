<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Myprofile extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_login");
		$this->load->library('form_validation');
	}

	public function index(){
		//$data["myprofile"] = $this->M_login->getAll();
		$this->load->view("admin/myprofile");
	}

	public function edit($id=null)
	{
		if (!isset($id)) redirect('admin/admin');
		$admin = $this->M_admin;
		$validation = $this->form_validation;
		$validation->set_rules($admin->rules());

		if($validation->run()) {
			$admin->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["admin"] = $admin->getById($id);
		if (!$data["admin"]) show_404();

		$this->load->view("admin/kelola_admin/edit_form", $data);
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();
		
		if ($this->M_admin->delete($id)) {
			redirect(site_url('admin/admin'));
		}
	}
}
?>