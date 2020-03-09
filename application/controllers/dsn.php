<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dsn extends CI_Controller {

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
	public function dashbord()
	{
		$this->load->view('template/header');
		$this->load->view('template/side-bar');
		$this->load->view('dsn/dsn-dashboard');
		$this->load->view('template/footer');
	}

	public function dosenpembimbing()
	{
		$data['tittle'] = 'Dosen Pembimbing';
		$this->load->view('template/dosen/head', $data);
		$this->load->view('template/dosen/header');
		$this->load->view('template/dosen/sidebar');
		$this->load->view('template/dosen/breadcrumb');
		$this->load->view('/dsn/dsn_pembimbing');
		$this->load->view('template/dosen/footer');
		$this->load->view('template/dosen/js');
	}
	public function dosenpenguji()
	{
		$data['tittle'] = 'Dosen Penguji';
		$this->load->view('template/dosen/head', $data);
		$this->load->view('template/dosen/header');
		$this->load->view('template/dosen/sidebar');
		$this->load->view('template/dosen/breadcrumb');
		$this->load->view('/dsn/dsn_penguji');
		$this->load->view('template/dosen/footer');
		$this->load->view('template/dosen/js');
	}
	public function kegiatan()
	{
		$data['tittle'] = 'Kegiatan KP';
		$this->load->view('template/dosen/head', $data);
		$this->load->view('template/dosen/header');
		$this->load->view('template/dosen/sidebar');
		$this->load->view('template/dosen/breadcrumb');
		$this->load->view('/dsn/kegiatan');
		$this->load->view('template/dosen/footer');
		$this->load->view('template/dosen/js');
	}
	public function jadwalsidang()
	{
		$data['tittle'] = 'Jadwal Sidang KP';
		$this->load->view('template/dosen/head', $data);
		$this->load->view('template/dosen/header');
		$this->load->view('template/dosen/sidebar');
		$this->load->view('template/dosen/breadcrumb');
		$this->load->view('/dsn/jadwalsidang');
		$this->load->view('template/dosen/footer');
		$this->load->view('template/dosen/js');
	}
	public function inputnilai()
	{
		$data['tittle'] = 'Input Nilai KP';
		$this->load->view('template/dosen/head', $data);
		$this->load->view('template/dosen/header');
		$this->load->view('template/dosen/sidebar');
		$this->load->view('template/dosen/breadcrumb');
		$this->load->view('/dsn/inputnilai');
		$this->load->view('template/dosen/footer');
		$this->load->view('template/dosen/js');
	}
	public function inputnilaipenguji()
	{
		$data['tittle'] = 'Input Nilai KP';
		$this->load->view('template/dosen/head', $data);
		$this->load->view('template/dosen/header');
		$this->load->view('template/dosen/sidebar');
		$this->load->view('template/dosen/breadcrumb');
		$this->load->view('/dsn/inputnilaipenguji');
		$this->load->view('template/dosen/footer');
		$this->load->view('template/dosen/js');
	}
}
