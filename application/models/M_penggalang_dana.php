<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_penggalan_dana extends CI_Model
{
	private $_table = "penggalang_dana";

	public $id_penggalang;
	public $id_member;
	public $nama;
	public $username;
	public $nik;
	public $no_kk;
	public $no_rek;

	public function rules()
	{
		return[
			['field' => 'nama',
			'label' => 'nama',
			'rules' => 'required'],

			['field' => 'nik',
			'label' => 'nik',
			'rules' => 'required'],

			['field' => 'no_kk',
			'label' => 'no_kk',
			'rules' => 'required'],

			['field' => 'no_rek',
			'label' => 'no_rek',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_penggalang)
	{
		return $this->db->get_where($this->_table, ["id_penggalang" => $id_penggalang])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_penggalang = NULL;
		$this->id_member = $post["id_member"];
		$this->nama = $post["nama"];
		$this->username = $post["username"];
		$this->nik = $post["nik"];
		$this->no_kk = $post["no_kk"];
		$this->no_rek = $post["no_rek"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_penggalang = $post["id_penggalang"];
		$this->id_member = $post["id_member"];
		$this->nama = $post["nama"];
		$this->username = $post["username"];
		$this->nik = $post["nik"];
		$this->no_kk = $post["no_kk"];
		$this->no_rek = $post["no_rek"];
		$this->db->update($this->_table, $this, array('id_penggalang' => $post['id_penggalang']));
	}

	public function delete($id_penggalang)
	{
		return $this->db->delete($this->_table, array("id_penggalang" => $id_penggalang));
	}

}