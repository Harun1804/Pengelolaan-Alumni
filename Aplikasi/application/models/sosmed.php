<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed extends CI_Model {

	public function input_sosmed($datas)
	{
		$this->db->insert('sosmed',$datas);
		return $this->db->insert_id();
	}

	public function ambil_satu_data($id)
	{
		return $this->db->get_where('sosmed',array('id'=>$id))->result_array();
	}

	public function update_sosmed($pengenal,$datas)
	{
		$this->db->where($pengenal);
		$this->db->update('sosmed',$datas);
	}
}
?>
