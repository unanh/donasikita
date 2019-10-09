<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('admin/login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("admin",$where)->num_rows();
		$data= $this->M_login->cek_login("admin",$where)->row();
		if($cek > 0){
 
			$data_session = array(
				'id' => $id,
				'nama' => $data->nama,
				'foto' => $data->foto,
				'email' => $data->username,
				'alamat' => $data->alamat,
				'bio' => $data->bio,
				'level' => $data->level,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			$this->session->set_flashdata('danger','Username dan password salah !');
			$this->load->view("admin/login");
		}
	}

	function forgotpassword()
	{
		$this->load->view('admin/forgot-password');
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}
?>