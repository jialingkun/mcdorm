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

	public function insert_new_mahasiswa($data)
	{
		$this->db->insert('user_mahasiswa', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function get_data_mahasiswa($id = NULL)
	{
		if ($id == NULL)
		{
			$query = $this->db->get('user_mahasiswa');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('user_mahasiswa', array('id_mahasiswa' => $id));
			return $query->row_array();
		}

		
	}

}