<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumni extends CI_Controller {

	function __construct()
	{
	 parent::__construct();
	 if($this->session->userdata('username'==""))
        {
            redirect('c_login');
        }
	$this->load->model('saran');
	$this->load->model('intansi');
	$this->load->model('biodata');
	$this->load->model('tmasuk');
	$this->load->model('pekerjaan');
	$this->load->model('user');
	$this->load->model('sosmed');
	}

	public function index()
	{
		$header['menu']='Home';
		$header['username'] = $this->session->userdata('nama');
		$this->load->view('layout/alumni/header',$header);
		$this->load->view('alumni/home');
		$this->load->view('layout/alumni/footer');
	}

	public function univ()
	{
		$header['menu']='Posisi Alumni Lain';
		$header['username'] = $this->session->userdata('nama');
		$this->load->view('layout/alumni/header',$header);
		$data['pt']=$this->intansi->lihat_intansi();
		$this->load->view('alumni/intansi',$data);
		$this->load->view('layout/alumni/footer');
	}

	public function angkatan()
	{
		$header['menu']='Teman seangkatan';
		$header['username'] = $this->session->userdata('nama');
		$tmasuk = $this->session->userdata('tahun');
		$data['tahun'] = $this->biodata->fulldata($tmasuk);
		$this->load->view('layout/alumni/header',$header);
		$this->load->view('alumni/tangkatan',$data);
		$this->load->view('layout/alumni/footer');
	}

	public function showprofile($id)
	{
		$bio =$this->biodata->ambil_alis($id);
		foreach ($bio as $b) {
			echo "
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td>".$b['nama']."</td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td> : </td>
				<td>".$b['nama_instansi']."</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td> : </td>
				<td>".$b['jurusan']."</td>
			</tr>
			<tr>
				<td>Facebook</td>
				<td> : </td>
				<td>".$b['facebook']."</td>
			</tr>
			<tr>
				<td>Instagram</td>
				<td> : </td>
				<td>".$b['instagram']."</td>
			</tr>
			<tr>
				<td>twitter</td>
				<td> : </td>
				<td>".$b['twitter']."</td>
			</tr>
			";
		}
	}

	public function showangkatan()
	{
		$header['menu']='Teman Berbeda angkatan';
		$header['username'] = $this->session->userdata('nama');
		$data['masuk'] = $this->tmasuk->ambil_tmasuk();
		$this->load->view('layout/alumni/header',$header);
		$this->load->view('alumni/bangkatan',$data);
		$this->load->view('layout/alumni/footer');
	}

	public function showangkatandetail($tmasuk="")
	{
		$datax['tahun'] = $this->biodata->fulldata($tmasuk);
		if($tmasuk=""){

		}else{
			$no = 1;
			foreach ($datax['tahun'] as $b) {
				echo "
				<tr>
				<td>".$no++."</td>
				<td>".$b['nama']."</td>
				<td>".$b['jk']."</td>
			</tr>";
			}
		}
	}

	public function saran()
	{
		$srn['saran']=$this->saran->ambil_ksaran();
		$header['menu']='Saran dan Masukan';
		$header['username'] = $this->session->userdata('nama');
		$this->load->view('layout/alumni/header',$header);
		$this->load->view('alumni/saran',$srn);
		$this->load->view('layout/alumni/footer');
	}

	public function psaran()
	{
		$id = $this->session->userdata('id');
		$idkat = $this->input->post('ksaran');
		$saran = $this->input->post('isaran');
		$data = array(
			'id_masukan'=>$idkat,
			'id'=>$id,
			'masukan'=>$saran,
		);
		$this->saran->input_saran($data);
		echo "<script>alert('Terima Kasih Atas Masukan Anda');history.go(-1);</script>";
	}

	public function halpengaturan()
	{
		$header['menu']='Home';
		$header['username'] = $this->session->userdata('nama');
		$this->load->view('layout/alumni/pengaturan/header',$header);
		$this->load->view('alumni/pengaturan/profile');
		$this->load->view('layout/alumni/pengaturan/footer');
	}

	public function halakun()
	{
		$header['menu']='Akun';
		$header['username'] = $this->session->userdata('nama');
		$id = $this->session->userdata('id');
		$data['akun']=$this->user->ambil_satu_data($id);
		$this->load->view('layout/alumni/pengaturan/header',$header);
		$this->load->view('alumni/pengaturan/akun',$data);
		$this->load->view('layout/alumni/pengaturan/footer');
	}

	public function halbiodata()
	{
		$header['menu']='Biodata';
		$header['username'] = $this->session->userdata('nama');
		$data['job']=$this->pekerjaan->ambil_pekerjaan();
		$data['tmasuk']=$this->tmasuk->ambil_tmasuk();
		$id = $this->session->userdata('id');
		$data['bio']=$this->biodata->ambil_bio($id);
		$this->load->view('layout/alumni/pengaturan/header',$header);
		$this->load->view('alumni/pengaturan/biodata',$data);
		$this->load->view('layout/alumni/pengaturan/footer');
	}

	public function halintansi()
	{
		$header['menu']='Intansi';
		$header['username'] = $this->session->userdata('nama');
		$id = $this->session->userdata('id');
		$data['intansi']=$this->intansi->ambil_satu_data($id);
		$this->load->view('layout/alumni/pengaturan/header',$header);
		$this->load->view('alumni/pengaturan/intansi',$data);
		$this->load->view('layout/alumni/pengaturan/footer');
	}

	public function halsosmed()
	{
		$header['menu']='Sosial Media';
		$header['username'] = $this->session->userdata('nama');
		$id = $this->session->userdata('id');
		$cek=$this->sosmed->ambil_satu_data($id);
		$key = array(
			'id'=>$id,
			'sosmed'=>$cek
		);
		if($cek == null){
			$this->load->view('layout/alumni/pengaturan/header',$header);
			$this->load->view('alumni/pengaturan/sosmedk',$key);
			$this->load->view('layout/alumni/pengaturan/footer');
		}else{
			$this->load->view('layout/alumni/pengaturan/header',$header);
			$this->load->view('alumni/pengaturan/sosmed',$key);
			$this->load->view('layout/alumni/pengaturan/footer');
		}
	}

	public function update_proses()
	{
		$button = $this->input->post('update');
		$id = $this->session->userdata('id');
		$pengenal = array('id'=>$id);
		if ($button == 'biodata') {
			$gdpn = $this->input->post('gdepan');
			$nm = $this->input->post('nama');
			$gblkn = $this->input->post('gbelakang');
			$jk = $this->input->post('jk');
			$nbr = $this->input->post('no');
			$almt = $this->input->post('alamat');
			$pkrn = $this->input->post('pekerjaan');
			$datab = array(
				'dgelar'=>$gdpn,
				'bgelar'=>$gblkn,
				'nama'=>$nm,
				'jk'=>$jk,
				'nomber'=>$nbr,
				'alamat'=>$almt,
				'id_pekerjaan'=>$pkrn
			);
			if($id == null){
				$this->biodata->input_bio($datab);
				echo "<script>alert('Biodata Berhasil Masuk');history.go(-1)</script>";
			}else{
				$this->biodata->update_bio($pengenal,$datab);
				echo "<script>alert('Biodata Berhasil Diperbaharui');history.go(-1)</script>";
				//redirect('alumni/halbio');
			}
		}elseif ($button=='akun') {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$datau = array(
				'id'=>$id,
				'username'=>$username,
				'password'=>$password
			);
			if($id == null){
				$this->user->input_user($datau);
				echo "<script>alert('Akun Berhasil Masuk');history.go(-1)</script>";
			}else{
				$this->user->update_user($pengenal,$datau);
				echo "<script>alert('Akun Berhasil Diperbaharui');history.go(-1)</script>";
				//redirect('alumni/halakun');
			}
		}elseif ($button=='intansi') {
			$nmi = $this->input->post('intansi');
			$jbtn = $this->input->post('jabatan');
			$fklts = $this->input->post('fakultas');
			$jrsn = $this->input->post('jurusan');
			$smtr = $this->input->post('semester');
			$datai = array(
				'id'=>$id,
				'nama_instansi'=>$nmi,
				'jabatan'=>$jbtn,
				'fakultas'=>$fklts,
				'jurusan'=>$jrsn,
				'semester'=>$smtr
			);
			if ($id == null) {
				$this->intansi->input_ins($datai);
				echo "<script>alert('Intansi Berhasil Masuk');history.go(-1)</script>";
			}else{
				$this->intansi->update_ins($pengenal,$datai);
				echo "<script>alert('Intansi Berhasil Diperbaharui');history.go(-1)</script>";
			}

		}else{
			$ln = $this->input->post('line');
			$fb = $this->input->post('facebook');
			$ig = $this->input->post('instagram');
			$tw = $this->input->post('twitter');
			$datas = array(
				'id'=>$id,
				'line'=>$ln,
				'facebook'=>$fb,
				'instagram'=>$ig,
				'twitter'=>$tw
			);
			$cek=$this->sosmed->ambil_satu_data($id);
			if ($cek == null) {
				$this->sosmed->input_sosmed($datas);
				echo "<script>alert('Sosmed Berhasil Masuk');history.go(-1)</script>";
			}else{
				$this->sosmed->update_sosmed($pengenal,$datas);
				echo "<script>alert('Sosmed Berhasil Diperbaharui');history.go(-1)</script>";
			}
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
