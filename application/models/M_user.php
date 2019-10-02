<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_user extends CI_Model
{
	private $_table = "user";

	public $id_user;
	public $nama;
	public $username;
	public $password;

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

	public function getById($id_user)
	{
		return $this->db->get_where($this->_table, ["id_user" => $id_user])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_user = NULL;
		$this->nama = $post["nama"];
		$this->username = $post["username"];
		$this->password = md5($post["password"]);
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_user = $post["id_user"];
		$this->nama = $post["nama"];
		$this->username = $post["username"];
		$this->password = md5($post["password"]);
		$this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
	}

	public function delete($id_user)
	{
		return $this->db->delete($this->_table, array("id_user" => $id_user));
	}

}