<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

  public function getlogin($u,$p){
    $pwd = sha1($p);
    $this->db->where('username',$u);
    $this->db->where('password',$pwd);
    $query = $this->db->get('tb_user');
    if ($query->num_rows()>0) {
      foreach ($query->result() as $row) {
        $sess = array('username'      => $row->username,
                      'nama_user'     => $row->nama_user,
                      'level'          => $row->level);
        $this->session->set_userdata($sess);
        redirect('home');
      }
      }else{
        $this->session->set_flashdata('info','maaf username atau password salah');
        redirect('login');
    }
  }
}
