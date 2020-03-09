<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamaster extends CI_Controller {

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
	public function tambahadmin()
	{
		$data['tittle'] = 'Tambah Admin';
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('/datamaster/t_admin');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
	public function tambahkoordinatorkp()
	{
		$data['tittle'] = 'Tambah Koordinator KP';
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('/datamaster/t_koorkp');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
	public function tambahkoordinatorta()
	{
		$data['tittle'] = 'Tambah Koordinator TA';
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('/datamaster/t_koorta');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
	public function tambahdosenpembimbing()
	{
		$data['tittle'] = 'Tambah Dosen Pembimbing';
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('/datamaster/t_dosbing');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
	public function tambahdosenpenguji()
	{
	$data['tittle'] = 'Tambah Dosen Penguji';		
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('/datamaster/t_dosji');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
	public function tambahmahasiswa()
	{
		$data['tittle'] = 'Tambah Mahasiswa';
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('/datamaster/t_mhs');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
	public function lihatmahasiswa()
	{
		$data['tittle'] = 'Lihat Mahasiswa';
		$this->load->view('template/datamaster/head', $data);
		$this->load->view('template/datamaster/header');
		$this->load->view('template/datamaster/sidebar');
		$this->load->view('template/datamaster/breadcrumb');
		$this->load->view('/datamaster/l_mhs');
		$this->load->view('template/datamaster/footer');
		$this->load->view('template/datamaster/js');
	}
}
