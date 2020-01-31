<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class intansi extends CI_Model {

	public function input_ins($datai)
	{
		$this->db->insert('intansi',$datai);
		return $this->db->insert_id();
	}

	public function lihat_intansi()
	{
		return $this->db->query("SELECT nama_instansi,COUNT(*) AS 'Jumlah Alumni' FROM intansi GROUP BY nama_instansi ORDER BY 'Jumlah Alumni' DESC")->result_array();
	}

	public function ambil_satu_data($id)
	{
		return $this->db->get_where('intansi',array('id'=>$id))->result_array();
	}

	public function update_ins($pengenal,$datai)
	{
		$this->db->where($pengenal);
		$this->db->update('intansi',$datai);
	}
}
?>
