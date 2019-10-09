<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_donasi extends CI_Model
{
	private $_table = "donasi";

	public $id_donasi;
	public $id_donatur;
	public $id_kampanye;
	public $tgl;
	public $jml_donasi;
	public $pembayaran;
	public $id_status = "1";

	public function rules()
	{
		return[
			['field' => 'id_donatur',
			'label' => 'id_donatur',
			'rules' => 'required'],

			['field' => 'id_kampanye',
			'label' => 'id_kampanye',
			'rules' => 'required'],

			['field' => 'tgl',
			'label' => 'tgl',
			'rules' => 'required'],

			['field' => 'jml_donasi',
			'label' => 'jml_donasi',
			'rules' => 'required'],

			['field' => 'pembayaran',
			'label' => 'pembayaran',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_donasi)
	{
		return $this->db->get_where($this->_table, ["id_donasi" => $id_donasi])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_donasi = NULL;
		$this->id_donatur = $post["id_donatur"];
		$this->id_kampanye = $post["id_kampanye"];
		$this->tgl = $post["tgl"];
		$this->jml_donasi = $post["jml_donasi"];
		$this->pembayaran = $post["pembayaran"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_donasi = $post["id_donasi"];
		$this->id_donatur = $post["id_donatur"];
		$this->id_kampanye = $post["id_kampanye"];
		$this->tgl = $post["tgl"];
		$this->jml_donasi = $post["jml_donasi"];
		$this->pembayaran = $post["pembayaran"];
		$this->id_status = $post["id_status"];
		$this->db->update($this->_table, $this, array('id_donasi' => $post['id_donasi']));
	}

	public function delete($id_donasi)
	{
		return $this->db->delete($this->_table, array("id_donasi" => $id_donasi));
	}

}