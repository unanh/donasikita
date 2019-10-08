<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Donasi extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_donasi");
		$this->load->library('form_validation');
	}

	public function index(){
		$data["donasi"] = $this->M_donasi->getAll();
		$this->load->view("admin/donasi/list", $data);
	}

	public function add(){ 
		$donasi = $this->M_donasi;
		$validation = $this->form_validation;
		$validation->set_rules($donasi->rules());

		if ($validation->run()) {
			$donasi->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/donasi/new_form2");
	}

	public function edit($id_donasi=null)
	{
		if (!isset($id_donasi)) redirect('admin/donasi');
		$donasi = $this->M_donasi;
		$validation = $this->form_validation;
		$validation->set_rules($donasi->rules());

		if($validation->run()) {
			$donasi->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["donasi"] = $donasi->getById($id_donasi);
		if (!$data["donasi"]) show_404();

		$this->load->view("admin/donasi/edit_form", $data);
	}

	public function delete($id_donasi=null)
	{
		if (!isset($id_donasi)) show_404();
		
		if ($this->M_donasi->delete($id_donasi)) {
			redirect(site_url('admin/donasi'));
		}
	}
}
?>