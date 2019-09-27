<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

public function index()
{
         $this->load->view('tampil/header');
         $this->load->view('home');
         $this->load->view('tampil/footer');
        
         
                
}
        
}
        
    /* End of file  user.php */
        
                            