<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
  public function cekLogin()
  {
    // Jika belum ada session username maka 
    // redirect ke halaman auth/login
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
  }
  
  public function getUserData()
  {
    // Ambil semua data session
    $userData = $this->session->userdata();

    // Return userdata
    return $userData;
  }

  public function isAdmin()
  {
    // Mengambil data session
    $userData = $this->getUserData();

    // Jika level user bukan administrator
    // maka redirect ke halaman 404
    if ($userData['level'] !== '1') show_404();
  }

  public function isPegawai()
  {
    // Mengambil data session
    $userData = $this->getUserData();

    // Jika level user bukan administrator
    // maka redirect ke halaman 404
    if ($userData['level'] !== '9') show_404();
  }

  public function isTuopd()
  {
    // Mengambil data session
    $userData = $this->getUserData();

    // Jika level user bukan administrator
    // maka redirect ke halaman 404
    if ($userData['level'] !== '11') show_404();
  }
}