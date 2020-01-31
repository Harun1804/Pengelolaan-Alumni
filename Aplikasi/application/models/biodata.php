<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biodata extends CI_Model {

	public function input_bio($datab)
	{
		$this->db->insert('biodata',$datab);
	}

	public function maxbioid()
    {
        $this->db->select('RIGHT(biodata.id,3)as kode',FALSE);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get('biodata');
        if($query->num_rows()<>0)
        {
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }
        else
        {
            $kode = 1;
        }
        $kodemax=str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "ALU".$kodemax;
        return $kodejadi;
    }

		public function fulldata($id)
		{
			return $this->db->get_where('fulldataalumni',array('id_masuk'=>$id))->result_array();
		}

		public function ambil_bio($id)
		{
			return $this->db->get_where('bio_per',array('id'=>$id))->result_array();
		}

		public function update_bio($pengenal,$datab)
		{
			$this->db->where($pengenal);
			$this->db->update('biodata',$datab);
		}

		public function ambil_alis($id)
		{
			return $this->db->get_where('alisdata',array('id'=>$id))->result_array();
		}

		public function lihat_jumlah()
		{
			return $this->db->query("SELECT id_masuk,COUNT(*) AS 'Jumlah Alumni' FROM biodata GROUP BY id_masuk ORDER BY 'Jumlah Alumni' DESC")->result_array();
		}

}
?>
