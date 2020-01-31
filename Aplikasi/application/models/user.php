<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

	public function cek_user($data)
	{
		return $this->db->get_where('aludata',$data);
	}

	public function input_user($datau)
	{
		$this->db->insert('user',$datau);
		return $this->db->insert_id();
	}

	public function ambil_satu_data($id)
	{
		return $this->db->get_where('user',array('id'=>$id))->result_array();
	}

	public function update_user($pengenal,$datau)
	{
		$this->db->where($pengenal);
		$this->db->update('user',$datau);
	}
}
?>
