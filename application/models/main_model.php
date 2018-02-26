<?php
class main_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_admin_login()
	{
		$query = $this->db->get('user_admin');
		return $query->row_array();
	}

}