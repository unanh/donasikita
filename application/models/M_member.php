<?php 
//define('BASEPATH') OR exit('NO direct script acces allowed');

/**
* 
*/
class M_member extends CI_Model
{
	private $_table = "member";

	public $id_member;
	public $id_user;
	public $foto = "default.png";
	public $alamat;
	public $bio;

	public function rules()
	{
		return[
			['field' => 'id_user',
			'label' => 'id_user',
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('member');
		$this->db->join('user', 'user.id_user = member.id_user');
		return $this->db->get()->result();
	}

	public function getById($id_member)
	{
		return $this->db->get_where($this->_table, ["id_member" => $id_member])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_member = NULL;
		$this->id_user = $post["id_user"];
		$this->foto = $this->_uploadImage();
		$this->alamat = $post["alamat"];
		$this->bio = $post["bio"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_member = $post["id_member"];
		$this->id_user = $post["id_user"];
		
		if (!empty($_FILES["foto"]["nama"])) {
			$this->foto = $this->_uploadImage();
		}else {
			$this->foto=$post["old_image"];
		}

		$this->alamat = $post["alamat"];
		$this->bio = $post["bio"];
		$this->db->update($this->_table, $this, array('id_member' => $post['id_member']));
	}

	public function delete($id_member)
	{
		$this->_deleteImage($id_member);
		return $this->db->delete($this->_table, array("id_member" => $id_member));
	}

	public function _uploadImage()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->id_member;
		$config['overwrite'] = true;
		$config['max_size'] = 600;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('foto')){
			return $this->upload->data("file_name");
		}

		return "default.png";
	}

	public function _deleteImage($id_member)
	{
		$member = $this->getById($id_member);
		if ($member->foto != "default.png") {
			$filename = explode(".", $member->foto)[0];
				return array_map('unlink', glob(FCPATH."assets/img/$filename.*"));
		}
	}
}