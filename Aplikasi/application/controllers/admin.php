<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct()
	{
	 parent::__construct();
	 if($this->session->userdata('username'==""))
        {
            redirect('c_login');
        }
				$this->load->model('saran');
				$this->load->model('biodata');
				$this->load->model('tmasuk');
				$this->load->model('pekerjaan');
	}

	public function index()
	{
		$header['menu']='Home';
		$header['username'] = $this->session->userdata('nama');
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/home');
		$this->load->view('layout/admin/footer');
	}

	public function htmasuk()
	{
		$header['menu']='Tahun Masuk';
		$header['username'] = $this->session->userdata('nama');
		$data['tmasuk']=$this->tmasuk->ambil_tmasuk();
		$data['tbaru']=$this->tmasuk->maxthnid();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/tmasuk/show',$data);
		$this->load->view('layout/admin/footer');
	}

	public function proses_ttahun()
	{
		$id=$this->input->post('id');
		$data = array(
			'id_masuk'=>$id,
			'tahun'=>$id
		);
		$this->tmasuk->tambah($data);
		echo "<script>alert('Data Berhasil Masuk');history.go(-1);</script>";
	}

	public function pekerjaan()
	{
		$header['menu']='Pekerjaan';
		$header['username'] = $this->session->userdata('nama');
		$data['pekerjaan']=$this->pekerjaan->ambil_pekerjaan();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/pekerjaan/show',$data);
		$this->load->view('layout/admin/footer');
	}

	public function tpekerjaan()
	{
		$header['menu']='Form Tambah Pekerjaan';
		$header['username'] = $this->session->userdata('nama');
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/pekerjaan/ftpekerjaan');
		$this->load->view('layout/admin/footer');
	}

	public function proses_input_pkrn()
	{
		$idp=$this->input->post('id_pekerjaan');
		$pkrjn=$this->input->post('jpekerjaan');
		$data=array(
			'id_pekerjaan'=>$idp,
			'nama_pekerjaan'=>$pkrjn
		);
		$this->pekerjaan->input_pkrn($data);
		echo "<script>alert('Data Berhasil Masuk');history.go(-1);</script>";
		//redirect('admin/pekerjaan');
	}

	public function edit_form_pkrn($id)
	{
		$header['menu']=' Edit Form Pekerjaan';
		$header['username'] = $this->session->userdata('nama');
		$data['pekerjaan']=$this->pekerjaan->ambil_one_pekerjaan($id);
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/pekerjaan/edit_form',$data);
		$this->load->view('layout/admin/footer');
	}

	public function proses_edit_pkrn($id)
	{
		$pkrjn=$this->input->post('jpekerjaan');
		$where = array('id_pekerjaan'=>$id);
		$data=array(
			'nama_pekerjaan'=>$pkrjn
		);
		$this->pekerjaan->update_pkrn($where,$data);
		//echo "<script>alert('Data Berhasil Masuk');history.go(-1);</script>";
		redirect('admin/pekerjaan');
	}

	public function hapus_pkrn($id)
	{
		$this->pekerjaan->hapus($id);
		redirect('admin/pekerjaan');
	}

	public function kmasukan()
	{
		$header['menu']='Kategori Masukan';
		$header['username'] = $this->session->userdata('nama');
		$data['masukan']=$this->saran->ambil_ksaran();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/kategori_masukan/show',$data);
		$this->load->view('layout/admin/footer');
	}

	public function formmsk()
	{
		$header['menu']='Form Kategori Masukan';
		$header['username'] = $this->session->userdata('nama');
		$data['idm']=$this->saran->maxktgrid();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/kategori_masukan/formktrmsk',$data);
		$this->load->view('layout/admin/footer');
	}

	public function proses_input_ktgr()
	{
		$idm=$this->input->post('id_masukan');
		$mskan=$this->input->post('nmasukan');
		$data=array(
			'id_masukan'=>$idm,
			'nama_kategori'=>$mskan
		);
		$this->saran->input_ktgr($data);
		echo "<script>alert('Data Berhasil Masuk');history.go(-1);</script>";
		//redirect('admin/kmasukan');
	}

	public function edit_form_ktgr($id)
	{
		$header['menu']=' Edit Form Kategori Masukan';
		$header['username'] = $this->session->userdata('nama');
		$data['idm']=$this->saran->ambil_id($id);
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/kategori_masukan/edit_form',$data);
		$this->load->view('layout/admin/footer');
	}

	public function proses_edit_ktgr($id)
	{
		$idm=$this->input->post('id_masukan');
		$mskan=$this->input->post('nmasukan');
		$where = array('id_masukan'=>$id);
		$data=array(
			'nama_kategori'=>$mskan
		);
		$this->saran->ubah_ktgr($where,$data);
		echo "<script>alert('Data Berhasil Di ubah');history.go(-1);</script>";
		redirect('admin/kmasukan');
	}

	public function hapus_ktgr($id)
	{
		$this->saran->hapus($id);
		redirect('admin/kmasukan');
	}

	public function falumni()
	{
		$header['menu']='Data Alumni';
		$header['username'] = $this->session->userdata('nama');
		$tmasuk['masuk']=$this->tmasuk->ambil_tmasuk();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/falumni',$tmasuk);
		$this->load->view('layout/admin/footer');
	}

	public function showmasuk($id="")
	{
		$bio=$this->biodata->fulldata($id);
		$no = 1;
		foreach ($bio as $s) {
			echo "
			<tr>
				<td>".$no++."</td>
				<td>".$s['dgelar']."</td>
				<td>".$s['nama']."</td>
				<td>".$s['bgelar']."</td>
				<td>".$s['jk']."</td>
				<td>".$s['nomber']."</td>
				<td>".$s['alamat']."</td>
				<td>".$s['nama_pekerjaan']."</td>
				<td>".$s['jabatan']."</td>
				<td>".$s['nama_instansi']."</td>
				<td>".$s['fakultas']."</td>
				<td>".$s['jurusan']."</td>
				<td>".$s['semester']."</td>
				<td>".$s['line']."</td>
				<td>".$s['facebook']."</td>
				<td>".$s['instagram']."</td>
				<td>".$s['twitter']."</td>
			</tr>
			";
		}
	}

	public function jalumni()
	{
		$header['menu']='Jumlah Alumni';
		$header['username'] = $this->session->userdata('nama');
		$jml['jumlah']=$this->biodata->lihat_jumlah();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/jalumni',$jml);
		$this->load->view('layout/admin/footer');
	}

	public function kotak_saran()
	{
		$header['menu']='Kotak Saran';
		$header['username'] = $this->session->userdata('nama');
		$ksaran['ksaran'] = $this->saran->ambil_ksaran();
		$this->load->view('layout/admin/header',$header);
		$this->load->view('admin/ksaran',$ksaran);
		$this->load->view('layout/admin/footer');
	}

	public function showsaran($id="")
	{
		$srn=$this->saran->show_saran($id);
		$no = 1;
		foreach ($srn as $s) {
			echo "
			<tr>
				<td>".$no++."</td>
				<td>".$s['id']."</td>
				<td>".$s['masukan']."</td>
			</tr>
			";
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
    $this->session->unset_userdata('role');
    session_destroy();
    redirect('welcome');
	}
}
