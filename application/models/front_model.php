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

	public function get_mahasiswa($id)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->join('user_kos', 'user_mahasiswa.id_kos = user_kos.id_kos', 'left');
		$this->db->join('kamar', 'user_mahasiswa.id_kamar = kamar.id_kamar', 'left');
		$this->db->where('id_mahasiswa',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_data_isikamar($idkamar)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('status','Belum Bayar');
		$this->db->where('id_kamar',$idkamar);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}else{
			return FALSE;
		}
	}

	public function get_all_kamar()
	{
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->join('user_kos', 'kamar.id_kos = user_kos.id_kos', 'left'); 
		$this->db->order_by("harga", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_search_kamar($gender,$hargamin,$hargamax)
	{
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->join('user_kos', 'kamar.id_kos = user_kos.id_kos', 'left'); 
		$this->db->where('gender_kos',$gender);
		$this->db->where('harga >',$hargamin);
		$this->db->where('harga <',$hargamax);
		$this->db->order_by("harga", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_data_kos($id,$table)
	{
		if ($table == 'kamar')
		{
			$query = $this->db->get_where('kamar', array('id_kos' => $id));
			return $query->result_array();
		}else{
			$query = $this->db->get_where('user_kos', array('id_kos' => $id));
			return $query->row_array();
		}
	}

}