<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_donatur extends CI_Model
{
	private $_table = "donatur";

	public $id_donatur;
	public $id_member;
	public $nama;
	public $username;

	public function rules()
	{
		return[
			['field' => 'nama',
			'label' => 'nama',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_donatur)
	{
		return $this->db->get_where($this->_table, ["id_donatur" => $id_donatur])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_donatur = NULL;
		$this->id_member = $post["id_member"];
		$this->nama = $post["nama"];
		$this->username = $post["username"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_donatur = $post["id_donatur"];
		$this->id_member = $post["id_member"];
		$this->nama = $post["nama"];
		$this->username = $post["username"];
		$this->db->update($this->_table, $this, array('id_donatur' => $post['id_donatur']));
	}

	public function delete($id_donatur)
	{
		return $this->db->delete($this->_table, array("id_donatur" => $id_donatur));
	}

}