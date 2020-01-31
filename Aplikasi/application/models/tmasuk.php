<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tmasuk extends CI_Model {

	public function ambil_tmasuk()
	{
		return $this->db->order_by('id_masuk','DESC')->get('tahun_masuk')->result_array();
	}

	public function maxthnid()
  {
    $this->db->select('RIGHT(tahun_masuk.id_masuk,4)as kode',FALSE);
    $this->db->order_by('id_masuk','desc');
    $this->db->limit(1);
    $query = $this->db->get('tahun_masuk');
    if($query->num_rows()<>0)
      {
        $data = $query->row();
        $kode = intval($data->kode)+1;
      }else{
        $kode = 1992;
      }
      $kodemax=str_pad($kode,4,"0",STR_PAD_LEFT);
      //$kodejadi = "KTGR".$kodemax;
      return $kodemax;
  }

	public function tambah($data)
	{
		$this->db->insert('tahun_masuk',$data);
	}
}
?>
