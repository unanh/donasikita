<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

public function index()
{
         $this->load->view('tampil/header');
         $this->load->view('home');
         $this->load->view('tampil/footer');
     
         
                
}
public function donasikes()
{
         $this->load->view('tampil/header');
         $this->load->view('donasikes');
         $this->load->view('tampil/footer');
     
         
                
}

public function kirimdl()
{
         $this->load->view('tampil/header');
         $this->load->view('kirimdl');
         $this->load->view('tampil/footer');
  
                
}

public function kirimdl2()
{
         $this->load->view('tampil/header');
         $this->load->view('kirimdl2');
         $this->load->view('tampil/footer');
  
                
}

public function kirimdl3()
{
         $this->load->view('tampil/header');
         $this->load->view('kirimdl3');
         $this->load->view('tampil/footer');
  
                
}

public function register()
{
         $this->load->view('tampil/header');
         $this->load->view('regdonatur');
         $this->load->view('tampil/footer');               
}
public function login()
{
         $this->load->view('tampil/header');
         $this->load->view('login');
         $this->load->view('tampil/footer');               
}    
public function detail()
{
         $this->load->view('tampil/header');
         $this->load->view('detail');
         $this->load->view('tampil/footer');
         
}
public function profilpem()
{
         $this->load->view('tampil/header');
         $this->load->view('profilpem');
         $this->load->view('tampil/footer');
}
public function donasipend()
{
         $this->load->view('tampil/header');
         $this->load->view('donasipend');
         $this->load->view('tampil/footer');
}
public function donasi()
{
         $this->load->view('tampil/header');
         $this->load->view('donasi');
         $this->load->view('tampil/footer');
}
public function editprofil()
{
         $this->load->view('tampil/header');
         $this->load->view('editprofil');
         $this->load->view('tampil/footer');
}
public function notif()
{
         $this->load->view('tampil/header');
         $this->load->view('notif');
         $this->load->view('tampil/footer');
}
public function galangdana()
{
         $this->load->view('tampil/header');
         $this->load->view('galangdana');
         $this->load->view('tampil/footer');
}
public function galangdana2()
{
         $this->load->view('tampil/header');
         $this->load->view('galangdana2');
         $this->load->view('tampil/footer');
}
}

    /* End of file  user.php */
        
                            