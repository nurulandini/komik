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
	
	public function action()
	{
		$data['border']='transparent';
		$data['page']='userview/action';
		$this->load->view('layout/main', $data);
	}

	public function adventure()
	{
		$data['border']='transparent';
		$data['page']='userview/adventure';
		$this->load->view('layout/main', $data);
	}
	
	public function comedy()
	{
		$data['border']='transparent';
		$data['page']='userview/comedy';
		$this->load->view('layout/main', $data);
	}

	public function fantasy()
	{
		$data['border']='transparent';
		$data['page']='userview/fantasy';
		$this->load->view('layout/main', $data);
	}

	public function horror()
	{
		$data['border']='transparent';
		$data['page']='userview/horror';
		$this->load->view('layout/main', $data);
	}

	public function romance()
	{
		$data['border']='transparent';
		$data['page']='userview/romance';
		$this->load->view('layout/main', $data);
	}

}
































?>