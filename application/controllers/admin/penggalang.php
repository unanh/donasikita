<?php
//if(!defined('BASEPATH') OR exit('No direct script access allowed'));
/**
* 
*/
class Penggalang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_penggalang");
		$this->load->library('form_validation');
	}

	public function add(){ 
		$penggalang = $this->M_penggalang;
		$validation = $this->form_validation;
		$validation->set_rules($penggalang->rules());

		if ($validation->run()) {
			$penggalang->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/kampanye/new_form");
	}

	public function edit($id_penggalang=null)
	{
		if (!isset($id_penggalang)) redirect('admin/kampanye');
		$penggalang = $this->M_penggalang;
		$validation = $this->form_validation;
		$validation->set_rules($penggalang->rules());

		if($validation->run()) {
			$penggalang->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["penggalang"] = $penggalang->getById($id_penggalang);
		if (!$data["penggalang"]) show_404();

		$this->load->view("admin/kampanye/edit_form", $data);
	}

	public function delete($id_penggalang=null)
	{
		if (!isset($id_penggalang)) show_404();
		
		if ($this->M_penggalang->delete($id_penggalang)) {
			redirect(site_url('admin/kampanye'));
		}
	}
}
?>