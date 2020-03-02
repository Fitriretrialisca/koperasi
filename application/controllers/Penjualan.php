<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan extends CI_Controller{

  public function index()
  {
    $data = array('title' => 'Halaman POS',
                  'isi'   =>'penjualan/pos'
                );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
  }

}
