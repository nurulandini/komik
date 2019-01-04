<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Horror extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/horror';
		$this->load->view('layout/konten', $data);
	}

}
































?>