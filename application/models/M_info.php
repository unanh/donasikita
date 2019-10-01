<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_info extends CI_Model
{
	private $_table = "info";

	public $id_info;
	public $judul;
	public $gambar;
	public $isi;

	public function rules()
	{
		return[
			['field' => 'judul',
			'label' => 'judul',
			'rules' => 'required'],

			['field' => 'isi',
			'label' => 'isi',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_info)
	{
		return $this->db->get_where($this->_table, ["id_info" => $id_info])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_info = NULL;
		$this->judul = $post["judul"];
		$this->gambar = $this->_uploadImage();
		$this->isi = $post["isi"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_info = $post["id_info"];
		$this->judul = $post["judul"];
		
		if (!empty($_FILES["gambar"]["judul"])) {
			$this->gambar = $this->_uploadImage();
		}else {
			$this->gambar=$post["old_image"];
		}

		$this->isi = $post["isi"];
		$this->db->update($this->_table, $this, array('id_info' => $post['id_info']));
	}

	public function delete($id_info)
	{
		//$this->_deleteImage($id_info);
		return $this->db->delete($this->_table, array("id_info" => $id_info));
	}

	public function _uploadImage()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->id_info;
		$config['overwrite'] = true;
		$config['max_size'] = 1024;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('gambar')){
			return $this->upload->data('file_name');
		}

		
	}

	public function _deleteImage($id_info)
	{
		$info = $this->getById($id_info);
		if ($info->gambar != "default.png") {
			$filename = explode(".", $info->gambar)[0];
				return array_map('unlink', glob(FCPATH."assets/img/$filename.*"));
		}
	}
}