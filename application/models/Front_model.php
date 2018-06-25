<?php
class Front_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->db->reconnect(); //debugging database result cached

	}

	public function duplikat_data_mahasiswa($data)
	{
		$this->db->where('id_mahasiswa', $data["id_mahasiswa"]);
		$q = $this->db->get('user_mahasiswa');
		$this->db->reset_query();

		if ( $q->num_rows() > 0 ) 
		{
			$this->db->where('id_mahasiswa', $data["id_mahasiswa"]);
			unset($data['id_mahasiswa']);
			unset($data['status']);
			unset($data['id_kos']);
			unset($data['id_kamar']);
			unset($data['tanggal_masuk']);
			unset($data['kadaluarsa']);
			unset($data['vakum']);
			unset($data['lama_pemesanan']);
			unset($data['id_kamardetail']);
			$this->db->update('user_mahasiswa', $data);
			$return_message = '1';
		} else {
			$this->db->insert('user_mahasiswa', $data);
			//get insert status fail or not
			if ($this->db->affected_rows() > 0 ) {
				$return_message = '1';
			}else{
				$return_message = 'Failed to insert record';
			}
		}
		return $return_message;
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

	public function update_password($data,$id,$oldpassword)
	{
		$this->db->where('id_mahasiswa', $id);
		$this->db->where('password', $oldpassword);
		$this->db->update('user_mahasiswa', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to change password';
		}

		return $return_message;
	}

	public function get_mahasiswa($id)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->join('user_kos', 'user_mahasiswa.id_kos = user_kos.id_kos', 'left');
		$this->db->join('kamar', 'user_mahasiswa.id_kamar = kamar.id_kamar', 'left');
		$this->db->join('kamar_detail', 'user_mahasiswa.id_kamardetail = kamar_detail.id_kamardetail', 'left');
		$this->db->where('id_mahasiswa',$id);
		$query = $this->db->get();
		return $query->row_array();
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

	public function get_data_isikamar($idkamar)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_kamar',$idkamar);
		$this->db->group_start();
		$this->db->where('status','Belum Bayar');
		$this->db->or_where('status','Belum Verifikasi');
		$this->db->or_where('status','Cek Ketersediaan');
		$this->db->group_end();
		
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

	public function get_search_kamar($hargamin,$hargamax,$jarakmin,$jarakmax,$sort,$gender)
	{
		if ($sort == 'harga') {
			$sortcolumn = 'harga';
		}else{
			$sortcolumn = 'distance';
		}
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->join('user_kos', 'kamar.id_kos = user_kos.id_kos', 'left'); 
		$this->db->where('gender_kos',$gender);
		$this->db->where('harga >',$hargamin);
		$this->db->where('harga <',$hargamax);
		$this->db->where('distance >=',$jarakmin);
		$this->db->where('distance <',$jarakmax);
		$this->db->order_by($sortcolumn, "asc");
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

	public function get_data_kamardetail($id, $jenis)
	{
		if ($jenis == "kamardetail")
		{
			$query = $this->db->get_where('kamar_detail', array('id_kamardetail' => $id));
			return $query->row_array();
		}else{
			$query = $this->db->get_where('kamar_detail', array('id_kamar' => $id));
			return $query->result_array();
		}
	}

	public function get_mahasiswa_by_kamardetail($idkamardetail){
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_kamardetail',$idkamardetail);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_history($idkamardetail=NULL)
	{
		if ($idkamardetail == NULL){
			$query = $this->db->get('history');
		}else{
			$query = $this->db->get_where('history', array('id_kamardetail' => $idkamardetail));
		}
		
		return $query->result_array();
	}


	public function get_history_mahasiswa($id)
	{
		$this->db->select('*');
		$this->db->from('history');
		$this->db->join('kamar_detail', 'history.id_kamardetail = kamar_detail.id_kamardetail', 'left');
		$this->db->where('id_mahasiswa',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function deletecache(){
		$this->db->cache_delete_all();
		$this->db->cache_off();
		
		$this->db->reset_query();
		$this->db->start_cache();
		$this->db->stop_cache();
		$this->db->flush_cache();
	}

}