<?php
class Main_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->db->reconnect(); //debugging database result cached
	}

	public function get_admin_login()
	{
		$query = $this->db->get('user_admin');
		return $query->row_array();
	}

	public function update_password($data,$oldpassword)
	{
		$this->db->where('password', $oldpassword);
		$this->db->update('user_admin', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to change password';
		}

		return $return_message;
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
			$this->db->join('kamar_detail', 'user_mahasiswa.id_kamardetail = kamar_detail.id_kamardetail', 'left');
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

	public function reset_password($data,$id)
	{
		$this->db->where('id_mahasiswa', $id);
		$this->db->update('user_mahasiswa', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to change password';
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

	public function get_data_isikos($idkos)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_kos',$idkos);
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

	public function get_data_isikamardetail($idkamardetail)
	{
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_kamardetail',$idkamardetail);
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

	public function get_history($idkamardetail=NULL)
	{
		if ($idkamardetail == NULL){
			$query = $this->db->get('history');
		}else{
			$query = $this->db->get_where('history', array('id_kamardetail' => $idkamardetail));
		}
		
		return $query->result_array();
	}

	public function delete($jenis, $id){
		if ($jenis == 'mahasiswa') {
			$this->db->where('id_mahasiswa', $id);
			$this->db->delete('user_mahasiswa'); 
		}else if ($jenis == 'kos') {
			$this->db->where('id_kos', $id);
			$this->db->delete('user_kos'); 
		}else if ($jenis == 'kamar') {
			$this->db->where('id_kamar', $id);
			$this->db->delete('kamar');
		}else if ($jenis == 'kamardetail') {
			$this->db->where('id_kamardetail', $id);
			$this->db->delete('kamar_detail');
		}

		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to delete record';
		}

		return $return_message;
	}

	public function insert_new_kamardetail($data)
	{
		$this->db->insert('kamar_detail', $data);
		$insert_id = $this->db->insert_id();
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = $insert_id;
		}else{
			$return_message = 0;
		}

		return $return_message;
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

	public function update_kamardetail($data,$id)
	{
		$this->db->where('id_kamardetail', $id);
		$this->db->update('kamar_detail', $data);
		//get insert status fail or not
		if ($this->db->affected_rows() > 0 ) {
			$return_message = '1';
		}else{
			$return_message = 'Failed to insert record';
		}

		return $return_message;
	}

	public function get_mahasiswa_by_kamardetail($idkamardetail){
		$this->db->select('*');
		$this->db->from('user_mahasiswa'); 
		$this->db->where('id_kamardetail',$idkamardetail);
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