<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Kampanye extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_kampanye");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["kampanye"] = $this->M_kampanye->getAll();
		$this->load->view("admin/kampanye/list", $data);
	}

	public function add(){ 
		$kampanye = $this->M_kampanye;
		$validation = $this->form_validation;
		$validation->set_rules($kampanye->rules());

		if ($validation->run()) {
			$kampanye->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/kampanye/new_form2");
	}

	public function edit($id_kampanye=null)
	{
		if (!isset($id_kampanye)) redirect('admin/kampanye');
		$kampanye = $this->M_kampanye;
		$validation = $this->form_validation;
		$validation->set_rules($kampanye->rules());

		if($validation->run()) {
			$kampanye->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["kampanye"] = $kampanye->getById($id_kampanye);
		if (!$data["kampanye"]) show_404();

		$this->load->view("admin/kampanye/edit_form", $data);
	}

	public function delete($id_kampanye=null)
	{
		if (!isset($id_kampanye)) show_404();
		
		if ($this->M_kampanye->delete($id_kampanye)) {
			redirect(site_url('admin/kampanye'));
		}
	}
}
?>