<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	public function login($user, $pass)
	{
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('admin');
		$query = $query->num_rows();
		if ($query==0) {
			redirect('admin/login');
		}
		else if ($query==1) {
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('admin');
		$data = $query->result();
			foreach ($data as $key => $w) {
			}
			$this->session->admin = $w->username;
			redirect('admin');
		}

	}
	
}
?>