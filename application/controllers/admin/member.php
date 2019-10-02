<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Member extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_admin");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["member"] = $this->M_admin->getAll();
		$this->load->view("admin/member/list", $data);
	}

	public function add(){ 
		$member = $this->M_member;
		$validation = $this->form_validation;
		$validation->set_rules($member->rules());

		if ($validation->run()) {
			$member->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/member/new_form");
	}

	public function edit($id_member=null)
	{
		if (!isset($id_member)) redirect('admin/member');
		$member = $this->M_member;
		$validation = $this->form_validation;
		$validation->set_rules($member->rules());

		if($validation->run()) {
			$member->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["member"] = $member->getById($id_member);
		if (!$data["member"]) show_404();

		$this->load->view("admin/member/edit_form", $data);
	}

	public function delete($id_member=null)
	{
		if (!isset($id_member)) show_404();
		
		if ($this->M_member->delete($id_member)) {
			redirect(site_url('admin/member'));
		}
	}
}
?>