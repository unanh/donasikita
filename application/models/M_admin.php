<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_admin extends CI_Model
{
	private $_table = "admin";

	public $id;
	public $nama;
	public $foto = "default.png";
	public $bio;
	public $username;
	public $password;
	public $level = "1";

	public function rules()
	{
		return[
			['field' => 'nama',
			'label' => 'nama',
			'rules' => 'required'],

			['field' => 'username',
			'label' => 'username',
			'rules' => 'required'],

			['field' => 'password',
			'label' => 'password',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id = NULL;
		$this->nama = $post["nama"];
		$this->foto = $this->_uploadImage();
		$this->alamat = $post["alamat"];
		$this->bio = $post["bio"];
		$this->username = $post["username"];
		$this->password = md5($post["password"]);
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->nama = $post["nama"];
		
		if (!empty($_FILES["foto"]["nama"])) {
			$this->foto = $this->_uploadImage();
		}else {
			$this->foto=$post["old_image"];
		}

		$this->alamat = $post["alamat"];
		$this->bio = $post["bio"];
		$this->username = $post["username"];
		$this->password = md5($post["password"]);
		$this->level = $post["level"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("id" => $id));
	}

	public function _uploadImage()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->id;
		$config['overwrite'] = true;
		$config['max_size'] = 600;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('foto')){
			return $this->upload->data("file_name");
		}

		return "default.png";
	}

	public function _deleteImage($id)
	{
		$admin = $this->getById($id);
		if ($admin->foto != "default.png") {
			$filename = explode(".", $admin->foto)[0];
				return array_map('unlink', glob(FCPATH."assets/img/$filename.*"));
		}
	}
}