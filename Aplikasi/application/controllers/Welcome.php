<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
	 parent::__construct();
	 $this->load->model('user');
	 $this->load->model('biodata');
	 $this->load->model('intansi');
	 $this->load->model('pekerjaan');
	 $this->load->model('tmasuk');
	}

	public function index()
	{
		$bread['menu']='Home';
		$this->load->view('layout/awal/header',$bread);
		$this->load->view('awal/welcome_message');
		$this->load->view('layout/awal/footer');
	}

	public function hallogin()
	{
		$bread['menu']='Halaman Login';
		$this->load->view('layout/awal/header',$bread);
		$this->load->view('awal/hal_login');
		$this->load->view('layout/awal/footer');
	}

	public function verlogin()
	{
		$username = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));

		$data=array(
      'username'=>$username,
      'password'=>$password
    );
		$hasil = $this->user->cek_user($data);
		if($hasil->num_rows()==1){
			foreach ($hasil->result() as $sess){
				$sess_data['id']=$sess->id;
				$sess_data['username']=$sess->username;
				$sess_data['nama']=$sess->nama;
				$sess_data['tahun']=$sess->tahun;
				$sess_data['role']=$sess->role;
				$this->session->set_userdata($sess_data);
			}
				if($this->session->userdata('role')==0){
					redirect('admin');
				}else{
					redirect('alumni');
				}
		}else{
			echo "<script>alert('username anda tidak ditemukan,silahkan daftar terlebih dahulu');history.go(-1);</script>";
		}
	}

	public function halregis()
	{
		$data['maxid']=$this->biodata->maxbioid();
		$data['job']=$this->pekerjaan->ambil_pekerjaan();
		$data['tmasuk']=$this->tmasuk->ambil_tmasuk();
		$bread['menu']='Halaman Registrasi';
		$this->load->view('layout/awal/header',$bread);
		$this->load->view('awal/hal_regis',$data);
		$this->load->view('layout/awal/footer');
	}

	public function proses_regis()
	{
		$id = $this->input->post('id');
		//Biodata
		$gdepan = $this->input->post('gdepan');
		$nama = $this->input->post('nama');
		$gblkng = $this->input->post('gbelakang');
		$jk = $this->input->post('jk');
		$nohp = $this->input->post('no');
		$masuk = $this->input->post('tmasuk');
		$pkrjn = $this->input->post('pekerjaan');

		$datab = array(
			'id'=>$id,
			'dgelar'=>$gdepan,
			'nama'=>$nama,
			'bgelar'=>$gblkng,
			'jk'=>$jk,
			'nomber'=>$nohp,
			'id_masuk'=>$masuk,
			'id_pekerjaan'=>$pkrjn
		);

		//pekerjaan
		$instansi = $this->input->post('instansi');

		$datap = array(
			'id'=>$id,
			'nama_instansi'=>$instansi
		);


		//Akun
		$email = $this->input->post('email');
		$pwd = $this->input->post('password');
		$cpwd = $this->input->post('cpassword');

		if($pwd != $cpwd)
		{
			echo "<script>alert('Password berbeda');</script>";
			redirect('welcome/halregis');
		}else{
			$epwd = md5($pwd);
			$dataa = array(
				'id'=>$id,
				'username'=>$email,
				'password'=>$epwd
			);
			$this->biodata->input_bio($datab);
			$this->intansi->input_ins($datap);
			$this->user->input_user($dataa);
		}
		redirect('welcome/hallogin');
	}
}
