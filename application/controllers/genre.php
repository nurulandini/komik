<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Genre extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/genre';
		$this->load->view('layout/main', $data);
	}

}
































?>