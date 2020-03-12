<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamaster extends CI_Controller
{

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

	// DASHBOARD ADMIN
	public function dashboard()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['value_main'] = 0;
		$value['value_side'] = 0;
		$value['title']="Dashboard";
		$value['header']="Dashboard";
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer');
	}

	// SETTINGS ADMIN ACCOUNTS
	public function setadm()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Admin";
		$value['header']="Admin";
		$value['value_main'] = 1;
		$value['value_side'] = 1;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}

	// SETTINGS KP ACCOUNTS
	public function setkp_kordinator()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Kordinator KP";
		$value['header']="Kordinator KP";
		$value['value_main'] = 2;
		$value['value_side'] = 1;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}
	public function setkp_pembimbing()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Pembimbing KP";
		$value['header']="Dosen Pembimbing KP";
		$value['value_main'] = 2;
		$value['value_side'] = 2;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}
	public function setkp_penguji()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Penguji KP";
		$value['header']="Dosen Penguji KP";
		$value['value_main'] = 2;
		$value['value_side'] = 3;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}
	public function setkp_mahasiswa()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Mahasiswa KP";
		$value['header']="Mahasiswa KP";
		$value['value_main'] = 2;
		$value['value_side'] = 4;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}

	// SETTINGS TA ACCOUNTS
	public function setta_kordinator()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Kordinator TA";
		$value['header']="Kordinator TA";
		$value['value_main'] = 3;
		$value['value_side'] = 1;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}
	public function setta_pembimbing()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Pembimbing TA";
		$value['header']="Dosen Pembimbing TA";
		$value['value_main'] = 3;
		$value['value_side'] = 2;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}
	public function setta_penguji()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Penguji TA";
		$value['header']="Dosen Penguji TA";
		$value['value_main'] = 3;
		$value['value_side'] = 3;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}
	public function setta_mahasiswa()
	{
		$value['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$value['title']="Mahasiswa TA";
		$value['header']="Mahasiswa TA";
		$value['value_main'] = 3;
		$value['value_side'] = 4;
		$this->load->view('template/header', $value);
		$this->load->view('template/datamaster/side-bar-dmt', $value);
		$this->load->view('datamaster/dmt-main', $value);
		$this->load->view('template/footer', $value);
	}

}
