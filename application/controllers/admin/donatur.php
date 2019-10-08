<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Donatur extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_donatur");
		$this->load->library('form_validation');
	}

	public function add(){ 
		$donatur = $this->M_donatur;
		$validation = $this->form_validation;
		$validation->set_rules($donatur->rules());

		if ($validation->run()) {
			$donatur->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/donasi/new_form");
	}

	public function edit($id_donatur=null)
	{
		if (!isset($id_donatur)) redirect('admin/donasi');
		$donatur = $this->M_donatur;
		$validation = $this->form_validation;
		$validation->set_rules($donatur->rules());

		if($validation->run()) {
			$donatur->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["donatur"] = $donatur->getById($id_donatur);
		if (!$data["donatur"]) show_404();

		$this->load->view("admin/donasi/edit_form", $data);
	}

	public function delete($id_donatur=null)
	{
		if (!isset($id_donatur)) show_404();
		
		if ($this->M_donatur->delete($id_donatur)) {
			redirect(site_url('admin/donasi'));
		}
	}
}
?>