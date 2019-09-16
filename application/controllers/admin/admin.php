<?php
define('BASEPATH') OR exit('NO direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_admin");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["admin"] = $this->admin->getAll();
		$this->load->view("admin/list", $data);
	}

	public function add(){
		$admin = $this->M_admin;
		$validation = $this->form_validation;
		$validation->set_rules($admin->rules());

		if ($validation->run()) {
			$product->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/new_form");
	}

	public function edit($id=null)
	{
		if (!isset($id)) redirect('admin');
		$product = $this->M_admin;
		$validation = $this->form_validation;
		$validation->set_rules($admin->rules());

		if($validation->run()) {
			$admin->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["admin"] = $product->getById($id);
		if (!$data["admin"]) show_404();

		$this->load->view("admin/edit_form", $data);
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();
		
		if ($this->M_admin->delete($id)) {
			redirect(site_url('admin'));
		}
	}
}
