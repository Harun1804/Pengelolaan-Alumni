<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class saran extends CI_Model {

	public function ambil_ksaran()
	{
		return $this->db->get_where('kategori_masukan')->result_array();
	}

	public function show_saran($id)
	{
		return $this->db->order_by('masukan','DESC')->get_where('saran',array('id_masukan'=>$id))->result_array();
	}

	public function maxktgrid()
  {
    $this->db->select('RIGHT(kategori_masukan.id_masukan,3)as kode',FALSE);
    $this->db->order_by('id_masukan','desc');
    $this->db->limit(1);
    $query = $this->db->get('kategori_masukan');
    if($query->num_rows()<>0)
      {
        $data = $query->row();
        $kode = intval($data->kode)+1;
      }else{
        $kode = 1;
      }
      $kodemax=str_pad($kode,3,"0",STR_PAD_LEFT);
      $kodejadi = "KTGR".$kodemax;
      return $kodejadi;
  }

	public function ambil_id($id)
	{
		return $this->db->get_where('kategori_masukan',array('id_masukan'=>$id))->result_array();
	}

	public function input_saran($data)
	{
		$this->db->insert('saran',$data);
		return $this->db->insert_id();
	}

	public function input_ktgr($data)
	{
		$this->db->insert('kategori_masukan',$data);
	}

	public function ubah_ktgr($id,$data)
	{
		$this->db->where($id);
		$this->db->update('kategori_masukan',$data);
	}

	public function hapus($id)
	{
		$this->db->delete('kategori_masukan',array('id_masukan'=>$id));
	}
}
?>
