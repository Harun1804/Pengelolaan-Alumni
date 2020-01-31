<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pekerjaan extends CI_Model {

	public function ambil_pekerjaan()
	{
		return $this->db->get('pekerjaan')->result_array();
	}

	public function input_pkrn($data)
	{
		$this->db->insert('pekerjaan',$data);
	}

	public function ambil_one_pekerjaan($id)
	{
		return $this->db->get_where('pekerjaan',array('id_pekerjaan'=>$id))->result_array();
	}

	public function update_pkrn($id,$data)
	{
		$this->db->where($id);
		$this->db->update('pekerjaan',$data);
	}

	public function hapus($id)
	{
		$this->db->delete('pekerjaan',array('id_pekerjaan'=>$id));
	}
}
?>
