<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// DASHBOARD MAHASISWA
	public function dasmhs()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['value_main'] = 0;
		$value['value_side'] = 0;
		$value['title']="Dashboard";
		$value['header']="Dashboard";
		$this->load->view('template/header',$value);
		$this->load->view('template/mahasiswa/side-bar-mhs',$value);
		$this->load->view('mhs/mhs-main',$value);
		$this->load->view('template/footer',$value);
	}

	// DASHBOARD MAHASISWA KP
	public function dasmhskp()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['value_main'] = 1;
		$value['value_side'] = 1;
		$value['title']="Dashboard";
		$value['header']="Dashboard";
		$this->load->view('template/header',$value);
		$this->load->view('template/mahasiswa/side-bar-mhs',$value);
		$this->load->view('mhs/mhs-main',$value);
		$this->load->view('template/footer',$value);
	}

	public function formulirpengajuanKP()
	{
		$data['tittle'] = 'Formulir Pengajuan KP';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/form_pengajuankp');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function cetakpengajuanKP()
	{
		$data['tittle'] = 'Cetak Pengajuan KP';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/cetak_pengajuankp');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function status()
	{
		$data['tittle'] = 'Status KP';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/status');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function kegiatan()
	{
		$data['tittle'] = 'Kegiatan';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/kegiatan');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function nilai()
	{
		$data['tittle'] = 'Nilai';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/nilai');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function unggahlaporan()
	{
		$data['tittle'] = 'Unggah Laporan';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/unggahlaporan');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function formulirpengajuansidang()
	{
		$data['tittle'] = 'Formulir Pengajuan Sidang';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/form_pengajuansidang');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
	public function cetakpengajuansidang()
	{
		$data['tittle'] = 'Cetak Pengajuan Sidang';
		$this->load->view('template/mahasiswa/head', $data);
		$this->load->view('template/mahasiswa/header');
		$this->load->view('template/mahasiswa/sidebar');
		$this->load->view('template/mahasiswa/breadcrumb');
		$this->load->view('/mhs/cetak_pengajuansidang');
		$this->load->view('template/mahasiswa/footer');
		$this->load->view('template/mahasiswa/js');
	}
}
