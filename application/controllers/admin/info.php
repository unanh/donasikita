<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Info extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_info");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["info"] = $this->M_info->getAll();
		$this->load->view("admin/post/list", $data);
	}

	public function add(){ 
		$info = $this->M_info;
		$validation = $this->form_validation;
		$validation->set_rules($info->rules());

		if ($validation->run()) {
			$info->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/post/new_form");
	}

	public function edit($id_info=null)
	{
		if (!isset($id_info)) redirect('admin_post');
		$info = $this->M_info;
		$validation = $this->form_validation;
		$validation->set_rules($info->rules());

		if($validation->run()) {
			$info->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["info"] = $info->getById($id_info);
		if (!$data["info"]) show_404();

		$this->load->view("admin/post/edit_form", $data);
	}

	public function delete($id_info=null)
	{
		if (!isset($id_info)) show_404();
		
		if ($this->M_info->delete($id_info)) {
			redirect(site_url('admin_post'));
		}
	}
}
?>