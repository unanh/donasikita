<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

public function index()
{
         $this->load->view('tampil/header');
         $this->load->view('home');
         $this->load->view('tampil/footer');
     
         
                
}
public function donasi()
{
         $this->load->view('tampil/header');
         $this->load->view('donasi');
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
public function us_login()
{
         $this->load->view('tampil/header');
         $this->load->view('us_login');
         $this->load->view('tampil/footer');               
}
        
}
        
    /* End of file  user.php */
        
                            