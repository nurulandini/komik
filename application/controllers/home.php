<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
	
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}

	public function deskripsi($id)
	{
		$data['id'] = $id;
		$data['border']='transparent' ;
		$data['page']='userview/konten' ;
		$this->load->view('layout/konten',$data);
	}
	public function search()
	{
		$data['border']='transparent' ;
		include 'searchql.php';
		$cari = $this->input->get('cari');
		$term = $cari;
		if ($term=='') {
			$term='';
		}
		$requestURL = search($term);
    			$data['data'] =json_decode(request($requestURL),true); 
    	$data['page'] = 'userview/search';
		$this->load->view('layout/main', $data);	 	 
	}
}
































?>