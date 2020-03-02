<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_data extends CI_Controller{

  public function index()
	{
    $data = array('title' => 'Halaman Barang',
                  'isi'   =>'master_data/list_barang'
                );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
  public function add_barang()
  {
    $data = array('title' =>  'Tambah Barang',
                  'isi'   =>  'master_data/add_barang'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function simpan_barang()
  {
    $data = array('title' =>  'Simpan Barang',
                  'isi'   =>  'master_data/simpan_barang'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function list_golongan()
  {
    $data = array('title' => 'Halaman Golongan',
                  'isi'   =>'master_data/list_golongan'
                );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function add_golongan()
  {
    $data = array('title' => 'Tambah Golongan',
                  'isi'   => 'master_data/add_golongan'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function simpan_golongan()
  {
    $data = array('title' => 'Simpan Golongan',
                  'isi'   => 'master_data/simpan_golongan'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function list_satuan()
  {
    $data = array('title' => 'Halaman Satuan',
                  'isi'   =>'master_data/list_satuan'
                );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function add_satuan()
  {
    $data = array('title' => 'Tambah Satuan',
                  'isi'   => 'master_data/add_satuan'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function simpan_satuan()
  {
    $data = array('title' => 'Simpan Satuan',
                  'isi'   => 'master_data/simpan_satuan'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function list_kota()
  {
    $data = array('title' => 'Halaman Kota',
                  'isi'   =>'master_data/list_kota'
                );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function add_kota()
  {
    $data = array('title' => 'Tambah Kota',
                  'isi'   => 'master_data/add_kota'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  public function simpan_kota()
  {
    $data = array('title' => 'Simpan Kota',
                  'isi'   => 'master_data/simpan_kota'
                );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

}
