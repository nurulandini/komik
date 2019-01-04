<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Adventure extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/adventure';
		$this->load->view('layout/konten', $data);
	}

}
































?>