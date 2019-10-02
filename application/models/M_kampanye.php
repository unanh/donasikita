<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_kampanye extends CI_Model 
{
	private $_table = "kampanye";

	public $id_kampanye;
	public $id_penggalang;
	public $id_kategori;
	public $judul;
	public $deskripsi;
	public $file;
	public $target_nominal;
	public $tgl_pencairan; 
	public $id_status = "1";

	public function rules()
	{
		return[
			['field' => 'id_penggalang',
			'label' => 'id_penggalang',
			'rules' => 'required'],

			['field' => 'id_kategori',
			'label' => 'id_kategori',
			'rules' => 'required'],

			['field' => 'judul',
			'label' => 'judul',
			'rules' => 'required'],

			['field' => 'deskripsi',
			'label' => 'deskripsi',
			'rules' => 'required'],

			['field' => 'terget_nominal',
			'label' => 'target_nominal',
			'rules' => 'numeric'],

			['field' => 'tgl_pencairan',
			'label' => 'tgl_pencairan',
			'rules' => 'required'],

			['field' => 'tgl_pencairan',
			'label' => 'tgl_pencairan',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_kampanye)
	{
		return $this->db->get_where($this->_table, ["id_kampanye" => $id_kampanye])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_kampanye = NULL;
		$this->id_penggalang = $post["id_penggalang"];
		$this->id_kategori = $post["id_kategori"];
		$this->judul = $post["judul"];
		$this->deskripsi = $post["deskripsi"];
		$this->file = $this->_uploadImage();
		$this->target_nominal = $post["target_nominal"];
		$this->tgl_pencairan = $post["tgl_pencairan"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_kampanye = $post["id_kampanye"];
		$this->id_penggalang = $post["id_penggalang"];
		$this->id_kategori = $post["id_kategori"];
		$this->judul = $post["judul"];
		$this->deskripsi = $post["deskripsi"];
		
		if (!empty($_FILES["file"]["nama"])) {
			$this->file = $this->_uploadImage();
		}else {
			$this->file=$post["old_image"];
		}

		$this->target_nominal = $post["target_nominal"];
		$this->tgl_pencairan = $post["tgl_pencairan"];
		$this->status = $post["status"];
		$this->db->update($this->_table, $this, array('id_kampanye' => $post['id_kampanye']));
	}

	public function delete($id_kampanye)
	{
		$this->_deleteImage($id_kampanye);
		return $this->db->delete($this->_table, array("id_kampanye" => $id_kampanye));
	}

	public function _uploadImage()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->id_kampanye;
		$config['overwrite'] = true;
		$config['max_size'] = 600;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('file')){
			return $this->upload->data("file_name");
		}

		//return "default.png";
	}

	public function _deleteImage($id_kampanye)
	{
		$kampanye = $this->getById($id_kampanye);
		if ($kampanye->foto != "default.png") {
			$filename = explode(".", $kampanye->foto)[0];
				return array_map('unlink', glob(FCPATH."assets/img/$filename.*"));
		}
	}
}