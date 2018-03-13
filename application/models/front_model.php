<?php
class front_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_mahasiswa_login($id,$password)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_mahasiswa',$id);
		$this->db->where('password',$password);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_search_kamar($gender,$hargamin,$hargamax)
	{
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->join('user_kos', 'kamar.id_kos = user_kos.id_kos', 'left'); 
		$this->db->where('gender_kos',$gender);
		$this->db->where('harga >',$hargamin);
		$this->db->where('harga <',$hargamax);
		$query = $this->db->get();
		return $query->result_array();
	}






	public function get_data_mahasiswa($id = NULL)
	{
		if ($id == NULL)
		{
			$query = $this->db->get('user_mahasiswa');
			return $query->result_array();
		}else{
			$this->db->select('*');
			$this->db->from('user_mahasiswa'); 
			$this->db->join('user_kos', 'user_mahasiswa.id_kos = user_kos.id_kos', 'left');
			$this->db->join('kamar', 'user_mahasiswa.id_kamar = kamar.id_kamar', 'left');
			$this->db->where('id_mahasiswa',$id);
			$query = $this->db->get();
			return $query->row_array();
		}

		
	}

}