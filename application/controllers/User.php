<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

public function index()
{
         $this->load->view('tampil/header');
         $this->load->view('home');
         $this->load->view('tampil/footer');
     
         
                
}
public function kesehatan()
{
         $this->load->view('tampil/header');
         $this->load->view('kategori/kesehatan');
         $this->load->view('tampil/footer');
     
         
                
}

public function laporan1()
{
         $this->load->view('tampil/header');
         $this->load->view('laporan1');
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
         $this->load->view('register');
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
public function pendidikan()
{
         $this->load->view('tampil/header');
         $this->load->view('kategori/pendidikan');
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
         $this->load->view('galangdana/galangdana');
         $this->load->view('tampil/footer');
}
public function galangdana2()
{
         $this->load->view('tampil/header');
         $this->load->view('galangdana/galangdana2');
         $this->load->view('tampil/footer');
}
public function retensi11()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi11');
         $this->load->view('tampil/footer');
}
public function retensi12()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi12');
         $this->load->view('tampil/footer');
}
public function retensi13()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi13');
         $this->load->view('tampil/footer');
}
public function retensi14()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi14');
         $this->load->view('tampil/footer');
}
public function retensi15()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi15');
         $this->load->view('tampil/footer');
}
public function retensi21()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi21');
         $this->load->view('tampil/footer');
}
public function retensi22()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi22');
         $this->load->view('tampil/footer');
}
public function retensi23()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi23');
         $this->load->view('tampil/footer');
}
public function retensi24()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi24');
         $this->load->view('tampil/footer');
}
public function retensi25()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi25');
         $this->load->view('tampil/footer');
}
public function retensi31()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi31');
         $this->load->view('tampil/footer');
}
public function retensi32()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi32');
         $this->load->view('tampil/footer');
}
public function retensi33()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi33');
         $this->load->view('tampil/footer');
}
public function retensi34()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi34');
         $this->load->view('tampil/footer');
}
public function tentang()
{
         $this->load->view('tampil/header');
         $this->load->view('bantusaja/about');
         $this->load->view('tampil/footer');
}
public function faq()
{
         $this->load->view('tampil/header');
         $this->load->view('bantusaja/faq');
         $this->load->view('tampil/footer');
}
public function events()
{
         $this->load->view('tampil/header');
         $this->load->view('event/events');
         $this->load->view('tampil/footer');
}
public function eventd()
{
         $this->load->view('tampil/header');
         $this->load->view('event/event_detail');
         $this->load->view('tampil/footer');
}
public function profil()
{
         $this->load->view('tampil/header');
         $this->load->view('akun/profil');
         $this->load->view('tampil/footer');
}
public function donasis()
{
         $this->load->view('tampil/header');
         $this->load->view('akun/donasi');
         $this->load->view('tampil/footer');
}
public function laporan()
{
         $this->load->view('tampil/header');
         $this->load->view('akun/laporan');
         $this->load->view('tampil/footer');
}
public function pesan()
{
         $this->load->view('tampil/header');
         $this->load->view('akun/notif');
         $this->load->view('tampil/footer');
}
public function permohonan()
{
         $this->load->view('tampil/header');
         $this->load->view('akun/permohonan');
         $this->load->view('tampil/footer');
}
public function contact()
{
         $this->load->view('tampil/header');
         $this->load->view('bantusaja/contact');
         $this->load->view('tampil/footer');
}
public function retensi35()
{
         $this->load->view('tampil/header');
         $this->load->view('retensi/retensi35');
         $this->load->view('tampil/footer');
}
}

    /* End of file  user.php */
        
                            