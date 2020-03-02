<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

//login page

	public function index()
	{
    $data = array('title' => 'Halaman Login');
		$this->load->view('login/list', $data, FALSE);
	}
}
