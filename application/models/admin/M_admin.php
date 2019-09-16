<?php define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_admin extends CI_Model
{
	private $_table = "admin";

	public $id;
	public $nama;
	public $foto;
	public $bio;
	public $username;
	public $password;
	public $level = "1";

	public function rules()
	{
		return[
			['field' => 'nama',
			'label' => 'nama',
			'rules' => 'require'],

			['field' => 'username',
			'label' => 'username',
			'rules' => 'require'],

			['field' => 'password',
			'label' => 'password',
			'rules' => 'require']
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
		$this->id = uniqid();
		$this->nama = $post["nama"];
		$this->foto = $post["foto"];
		$this->alamat = $post["alamat"];
		$this->bio = $post["bio"];
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->nama = $post["nama"];
		$this->foto = $post["foto"];
		$this->alamat = $post["alamat"];
		$this->bio = $post["bio"];
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id" => $id));
	}
}