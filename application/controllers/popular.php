<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Popular extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/popular';
		$this->load->view('layout/main', $data);
	}

}
































?>