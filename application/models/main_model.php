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
			$this->db->select('*');
			$this->db->from('user_mahasiswa'); 
			$this->db->join('user_kos', 'user_mahasiswa.id_kos = user_kos.id_kos', 'left');
			$this->db->join('kamar', 'user_mahasiswa.id_kamar = kamar.id_kamar', 'left');
			$this->db->where('id_mahasiswa',$id);
			$query = $this->db->get();
			return $query->row_array();
		}

		
	}

	public function update_mahasiswa($data,$id)
	{
		$this->db->where('id_mahasiswa', $id);
		$this->db->update('user_mahasiswa', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function insert_new_kos($data)
	{
		$this->db->insert('user_kos', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function get_data_kos($id = NULL)
	{
		if ($id == NULL)
		{
			$query = $this->db->get('user_kos');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('user_kos', array('id_kos' => $id));
			return $query->row_array();
		}
	}

	public function update_kos($data,$id)
	{
		$this->db->where('id_kos', $id);
		$this->db->update('user_kos', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function insert_new_kamar($data)
	{
		$this->db->insert('kamar', $data);
		$insert_id = $this->db->insert_id();
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = $insert_id;
		}else{
			$return_message = 0;
		}

		return $return_message;
	}

	public function get_data_isikamar($idkamar)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_kamar',$idkamar);
		$this->db->group_start();
		$this->db->where('status','Belum Bayar');
		$this->db->or_where('status','Belum Verifikasi');
		$this->db->group_end();
		
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}else{
			return FALSE;
		}
	}
	
	public function get_data_kamar($idkos,$idkamar = NULL)
	{
		if ($idkamar == NULL)
		{
			$query = $this->db->get_where('kamar', array('id_kos' => $idkos));
			return $query->result_array();
		}else{
			$query = $this->db->get_where('kamar', array('id_kos' => $idkos, 'id_kamar' => $idkamar));
			return $query->row_array();
		}
	}

	public function update_kamar($data,$idkos,$idkamar)
	{
		$this->db->where('id_kos', $idkos);
		$this->db->where('id_kamar', $idkamar);
		$this->db->update('kamar', $data);
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function minus_kuota_kamar($idkamar){
		$this->db->set('kuota', 'kuota-1', false);
		$this->db->where('id_kamar' , $idkamar);
		$this->db->update('kamar');
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function insert_new_history($data)
	{
		$this->db->insert('history', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

}